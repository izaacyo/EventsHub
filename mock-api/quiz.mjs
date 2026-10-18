const urls = [
  'http://localhost:3001/events?page=1',
  'http://localhost:3001/events?page=2&fail=1',   // this one fails
  'http://localhost:3001/events?page=3',
];

async function getPage(url) {
  const res = await fetch(url);
  if (!res.ok) throw new Error('Status ' + res.status);
  return res.json();
}

// Version 1: all or nothing
try {
  await Promise.all(urls.map(getPage));
} catch (e) {
  console.log('Promise.all gave up:', e.message);
}

// Version 2: give me everything, tell me what failed
const results = await Promise.allSettled(urls.map(getPage));
results.forEach((r, i) => console.log('Page', i + 1, '→', r.status));
