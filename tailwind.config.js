/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {},
  },
  plugins: [],
}
// npx tailwindcss -i ./css/input.css -o ./css/tailwind.css --watch