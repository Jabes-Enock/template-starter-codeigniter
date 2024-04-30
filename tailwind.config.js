/** @type {import('tailwindcss').Config} */


module.exports = {
  mode: 'jit',
  content: [
    './app/Views/**/*.php',
    './app/Views/*.php',
    './app/Cells/*.php',
    './app/Cells/Home/*.php',
    './app/Cells/About/*.php',
    './app/Cells/Contact/*.php',
    './app/Controllers/*.php',
  ],
  theme: {
  },
  plugins: [],
}

