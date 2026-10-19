import {useEffect, useState} from 'react';
import { API } from './api';

// A custom hook: a function whose name starts with "use" and which uses
// other hooks inside. Components call it like:
//   const { loading, error, events } = useEvents('Helsinki');
export function useEvents(city) {
  // useState = the component's memory. When it changes, React redraws.
  // We keep three things together: are we loading? did it fail? the data.
  const [state, setState] = useState({ loading: true, error: null, events: [] });

  // useEffect = "do something OUTSIDE drawing the page", like fetching data.
  // It runs after the first draw, and again whenever a value in the
  // [city] list at the bottom changes.
  useEffect(() => {
    // An "abort switch" for this request. If city changes before the answer
    // arrives, we flip it, and the old request is cancelled.
    const controller = new AbortController();

    // Build the query string. URLSearchParams takes care of encoding
    // (spaces, brackets, ä, ș...).
    const params = new URLSearchParams({
      sort: 'field_date',
      'page[limit': '10'
    })
    if (city) {
      // JSON:API filter: follow the field_cities reference, compare the name.
      params.set('filter[field_cities.name]', city);
    }

    // Show "Loading…" while we wait, but keep the old list on screen.
    setState((old) => ({ ...old, loading: true, error: null }));

    fetch(`${API}/jsonapi/node/events?${params}`, { signal: controller.signal })
      .then((res) => {
        // fetch only fails by itself if the server can't be reached at all.
        // A 404 or 500 still "succeeds", so check it ourselves (Mission 2 quiz!).
        if(!res.ok) throw new Error('HTTP ${res.status}');
        return res.json();
      })
      .then((json) => setState({ loading: false, error: null, events: json.data }))
      .catch((err) => {
        if(err.name === 'AbortError') return;
        setState({ loading: false, error: err.message, events: [] });
      });

    // THE CLEANUP: React calls this before the effect runs again (city
    // changed) or when the component disappears. We cancel the old request,
    // so a slow "Helsinki" answer can never overwrite a newer "Cluj" one.
    return() => controller.abort();
  }, [city]);

  return state;
}
