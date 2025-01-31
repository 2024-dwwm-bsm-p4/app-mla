/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    './src/**/*.php',
  ],
  theme: {
    extend: {
      
    },
  },
  plugins: [require('@tailwindcss/forms')],
}
