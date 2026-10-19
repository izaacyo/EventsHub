// The Drupal address, read from .env.local. Vite only exposes variables
// whose names start with VITE_ to the browser code.
// Keeping it out of the code means the same app can point at local,
// staging or production just by changing the .env file.
export const API = import.meta.env.VITE_API_URL;
