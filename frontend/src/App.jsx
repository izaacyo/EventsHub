import { useState } from 'react';
import { API } from './api';
import { useEvents } from './useEvents';
import { TopEvents } from './TopEvents';

// The cities in your mock API. (Next version would fetch them from
// /jsonapi/taxonomy_term/cities.)
const CITIES = [ 'Helsinki', 'Cluj', 'Berlin', 'Bucharest'];

export default function App() {
  // The component's memory:
  const [city, setCity] = useState('')
  const [name, setName] = useState('')
  const [refreshKey, setRefreshKey] = useState(0);
  const [message, setMessage] = useState('');

  const { loading, error, events } = useEvents(city);


  // Called when an "I'm going" button is clicked.
  // async/await = the same Promises as in Mission 2, written step by step.
  async function rsvp(nid) {
    setMessage('');
    try {
      const res = await fetch(`${API}/api/events/${nid}/rsvp`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name, status: 'going'}),
      });
    if (!res.ok) throw new Error('HTTP ${res.status}');
    setMessage('Thanks, you are going!');
    // Change the number -> TopEvents sees a new refreshKey -> fetches again.
    setRefreshKey((k) => k +1);
    } catch (err) {
      setMessage('RSVP failed: ${err.message}');
    }
  }

  return (
    <main>
      <h1>Events Hub</h1>

      <p>
        <label>
          City:{' '}
          {/* A "controlled" select: React holds the value, and every change
              goes through setCity, which triggers useEvents to fetch. */}
          <select value={city} onChange={(e) => setCity(e.target.value)}>
            <option value="">All cities</option>
            {CITIES.map((c) => (
              <option key={c} value={c}>{c}</option>
            ))}
          </select>
        </label>
      </p>

      <p>
        <label>
          Your name (use a made-up one):{' '}
          <input value={name} onChange={(e) => setName(e.target.value)} />
        </label>
      </p>

      {message && <p>{message}</p>}
      {loading && <p>Loading…</p>}
      {error && <p>Error: {error}</p>}

      <ul>
        {events.map((event) => (
          // event.id is the UUID: unique, so it's a good React key.
          <li key={event.id}>
            <strong>{event.attributes.title}</strong>{' '}
            {/* JSON:API sends the date as text; turn it into a readable one. */}
            ({new Date(event.attributes.field_date).toLocaleString()}){' '}
            {/* The RSVP endpoint wants the nid, not the UUID. Disabled until a
                name is typed, so we don't send an empty one (it'd get a 422). */}
            <button
              onClick={() => rsvp(event.attributes.drupal_internal__nid)}
              disabled={!name.trim()}
            >
              I'm going
            </button>
          </li>
        ))}
      </ul>

      <TopEvents refreshKey={refreshKey} />
    </main>
  );
}
