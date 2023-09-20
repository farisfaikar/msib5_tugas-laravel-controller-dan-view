/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "frosty": {
          50: "#edeff6",
          100: "#c6cce2",
          200: "#abb4d3",
          300: "#8491bf",
          400: "#6d7cb3",
          500: "#485ba0",
          600: "#425392",
          700: "#334172",
          800: "#283258",
          900: "#1e2643",
          950: "#111627",
        }
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

