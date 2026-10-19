import { useEffect, useState } from 'react';
import { API } from './api';

export function TopEvents({ refreshKey }) {
  const [rows, setRows] = useState([]);

  useEffect(() => {
    const controller = new AbortController();

    fetch(`${API}/api/events/top`, { signal: controller.signal })
      .then((res) => {
        if(!res.ok) throw new Error('HTTP ${res.status}');
        return res.json();
      })
      .then(setRows)
      .catch((err) => {
        if(err.name !== 'AbortError') console.error('Top events failed:', err);
      });

    return () => controller.abort()
  }, [refreshKey]);

  return (
    <aside>
      <h2> Top Events </h2>
      {rows.length === 0 ? (
        <p> No RSVPs yet</p>
      ) : (
        <ol>
          {/* .map() turns each row into a list item.
              key= helps React tell items apart when the list changes. */}
          {rows.map((row) => (
            <li key={row.event_nid}>
              {row.title}: {row.going} going
            </li>
          ))}
        </ol>
      )}
    </aside>
  );
}
