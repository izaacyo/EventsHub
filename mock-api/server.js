const express = require('express');
// import express from 'express'; // ES6 import syntax
const sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

const app = express();
const PORT = process.env.PORT || 3001;

const cities = ['Berlin', 'Cluj', 'Munich', 'Bucharest'];
const DAY = 24 * 60 * 60 * 1000;

const events = Array.from({ length: 200 }, (_, i) => ({
  id: `ext-${i + 1}`,
  title: `Event #${i + 1}`,
  city: cities[i % cities.length],
  date: new Date(Date.now() + (i - 20) * DAY).toISOString(),
  description: 'Synthetic test event.',
}));

app.use((req, res, next) => {
  const start = Date.now();
  res.on('finish', () => {
    console.log(`${req.method} ${req.originalUrl} ${res.statusCode} ${Date.now() - start}ms`);
  });
  next();
});

app.get('/api/data', (req, res) => {
  res.json({ status: 'ok', message: 'Mock API is working!' });
})

app.get('/events', async (req, res) => {
  await sleep(200); // Simulate network latency

  // Simulate failure
  if (req.query.fail) {
    return res.status(500).json({ error: 'Upstream exploded' });
  }

  const page = Math.max(1, parseInt(req.query.page ?? '1', 10) || 1);
  const size = 20;
  const start = (page - 1) * size;

  res.json({
    data: events.slice(start, start + size),
    next: start + size < events.length ? page + 1 : null,
  });
});

app.get('/events/:id', (req, res) => {
  const event = events.find((e) => e.id === req.params.id);
  if (!event) {
    return res.status(404).json({ error: 'Event not found' });
  }
  res.json(event);
});

/*  app.get('/block', (req, res) => {
  const end = Date.now() + 3000;
  while (Date.now() < end) {} // busy loop: CPU work, no await
  res.send('done');
}); */

app.use((req, res) => {
  res.status(404).json({ error: 'Not found' });
});

app.use((err, req, res, next) => {
  console.error(err);
  const status = err.status || err.statusCode || 500
  res.status(status).json({ error: status === 500 ? 'Internal server error' : err.message });
});

app.listen(PORT, () => {
  console.log(`Mock API server is running on http://localhost:${PORT}`);
})
