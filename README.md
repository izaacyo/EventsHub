# Events Hub

A decoupled events platform: **Drupal 11** imports events from an external API and serves them over **JSON:API** and custom endpoints to a **React** frontend. Visitors can browse events by city and RSVP.

Built as a hands-on practice project covering Drupal module development, PHP, MySQL, Node.js/React, Nginx, Drush and a GCP deployment design.

## Architecture

```
┌──────────────┐   import (cron/queue/drush)   ┌──────────────────────────┐
│  Mock API    │ ────────────────────────────▶ │  Drupal 11 (PHP 8.3)     │
│  Node/Express│                               │  Nginx + PHP-FPM         │
│  :3001       │                               │  MySQL 8                 │
└──────────────┘                               │  module: events_hub      │
                                               └────────────┬─────────────┘
                                                            │ JSON:API + /api/*
                                                            ▼
                                               ┌──────────────────────────┐
                                               │  React frontend (Vite)   │
                                               │  :5173                   │
                                               └──────────────────────────┘
```

## Tech stack

| Layer | Technology |
|---|---|
| CMS / backend | Drupal 11, PHP 8.3, Composer |
| Database | MySQL 8.0 |
| Web server | Nginx + PHP-FPM (via DDEV) |
| CLI | Drush 13 |
| Frontend | React + Vite |
| Mock external API | Node.js 22 + Express |
| Local environment | DDEV + Docker |
| Target hosting | Google Cloud Platform (see [Deployment](#deployment-gcp)) |

## Requirements

- Docker and [DDEV](https://ddev.com) 1.24+
- Node.js 22+ (for the frontend and mock API)
- Composer 2 (optional on the host; `ddev composer` works too)

## Quick start

```bash
git clone <repo-url> events-hub && cd events-hub
ddev start
ddev composer install
ddev drush site:install standard --existing-config -y
ddev drush uli
```

Start the mock API and frontend in separate terminals:

```bash
cd mock-api && npm install && npm start      # http://localhost:3001
cd frontend && npm install && npm run dev    # http://localhost:5173
```

Import events:

```bash
ddev drush events:import --limit=50
```

The site runs at **https://events-hub.ddev.site**.

## Content model

| Item | Machine name | Notes |
|---|---|---|
| Content type | `events` | Imported events |
| Vocabulary | `cities` | Created automatically during import |
| Field | `field_date` | Date + time, stored in UTC |
| Field | `field_cities` | Term reference to `cities` |
| Field | `field_external_id` | ID from the external API; makes imports idempotent |

All of this lives in config: `config/sync/`.

## Configuration management

| Folder | Contents |
|---|---|
| `config/sync/` | Shared config for all environments |
| `config/dev/` | Dev-only split (Devel, Devel Generate) |
| `config/prod/` | Prod-only split (Syslog) |

Splits are stored as **inactive** and switched on per environment with the `APP_ENV` environment variable in `settings.php`:

| Environment | `APP_ENV` | Active split |
|---|---|---|
| Local (DDEV) | `dev` (set in `.ddev/config.yaml`) | `dev` |
| Production | `prod` | `prod` |

If `APP_ENV` is missing, the site falls back to `prod`.

Typical workflow:

```bash
ddev drush cex -y     # after changing config in the UI
git add config && git commit
ddev drush cim -y     # after pulling someone else's changes
```

## Custom module: `events_hub`

Location: `web/modules/custom/events_hub`

| Feature | Implementation |
|---|---|
| Settings form | `ConfigFormBase` with `#config_target`, at `/admin/config/services/events-hub` |
| API client | Service `events_hub.api_client` (Guzzle, injected config and logger) |
| Importer | Service `events_hub.importer`; idempotent on `field_external_id` |
| Background import | `QueueWorker` plugin `events_hub_import`, filled by `hook_cron` |
| Drush command | `drush events:import [--limit=N] [--queue]` |
| Hooks | OOP hooks in `src/Hook/` (`#[Hook]` attributes); past events are unpublished on save |
| Event subscriber | Adds an `X-Events-Hub` header to `/api/*` responses |
| Block | "Upcoming events", filterable by `?city=`, cached with tags/contexts/max-age |
| RSVP storage | Custom table `events_hub_rsvp` (`hook_schema`, `hook_update_N`) |

## API

| Method | Path | Description |
|---|---|---|
| GET | `/jsonapi/node/events` | Events (core JSON:API; supports `filter`, `sort`, `include`, `page`) |
| POST | `/api/events/{nid}/rsvp` | Create an RSVP. Body: `{"name": "...", "status": "going\|maybe\|declined"}` |
| GET | `/api/events/top` | Top 10 events by "going" RSVPs in the last 30 days (cached, tag `events_hub_rsvp`) |

Example:

```bash
curl "https://events-hub.ddev.site/jsonapi/node/events?filter[field_cities.name]=Berlin&sort=field_date"
```

CORS is enabled for `http://localhost:5173` in `web/sites/default/services.yml`.

## Database notes

- The RSVP table has a composite index `(status, created, event_nid)` that covers the "top events" query.
- See `docs/mysql-index-lab.md` for `EXPLAIN` output before and after the index.

## Nginx

A custom server block lives in `.ddev/nginx_full/nginx-site.conf`:

- Front controller via `try_files $uri /index.php?$query_string`
- Denies dotfiles, `/vendor`, private files, and PHP files under `sites/*/files`
- Long cache headers and gzip for static assets
- Rate limit on `POST /api/events/*/rsvp` (5 requests/minute per IP)

## Useful commands

```bash
ddev drush cr                        # rebuild caches
ddev drush deploy                    # updb → cr → cim → cr → deploy hooks
ddev drush events:import --queue     # enqueue an import
ddev drush queue:run events_hub_import
ddev drush watchdog:show             # recent log messages
ddev drush devel-generate:content 20 --bundles=events   # dev only
ddev mysql                           # MySQL shell
ddev xdebug on                       # step debugging
```

## Testing

```bash
ddev exec "SIMPLETEST_DB=mysql://db:db@db/db vendor/bin/phpunit -c web/core web/modules/custom/events_hub"
```

## Deployment (GCP)

Planned target architecture:

- **Cloud Run** runs the Drupal container (Nginx + PHP-FPM); revisions allow instant rollback
- **Cloud SQL for MySQL** for the database
- **Cloud Storage** for `sites/default/files` (containers are stateless)
- **Memorystore (Redis)** for Drupal cache bins
- **Secret Manager** for database credentials and the hash salt
- **Cloud Build → Artifact Registry → Cloud Run** for CI/CD
- **Cloud Scheduler** triggers cron
- `drush deploy` runs as a Cloud Run Job before traffic switches to the new revision
- The React build is served as static files from a Cloud Storage bucket behind Cloud CDN

## Privacy

RSVPs store a visitor-supplied name. This project uses **synthetic data only**. A production version would need a consent notice, a defined retention period with automatic deletion, and a way to delete a person's RSVPs on request.

## Project structure

```
.
├── .ddev/                    # DDEV config (+ nginx_full/ custom Nginx)
├── config/
│   ├── sync/                 # shared config
│   ├── dev/                  # dev split
│   └── prod/                 # prod split
├── frontend/                 # React + Vite app
├── mock-api/                 # Node/Express mock events API
├── web/
│   ├── modules/custom/events_hub/
│   └── sites/default/        # settings.php, services.yml
├── composer.json
└── composer.lock
```
