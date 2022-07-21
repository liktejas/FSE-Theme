/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.html", "./**/*.css", "./**/*.json"],
  corePlugins: {
    preflight: false
  },
  theme: {
    extend: {
      colors: {
        primary: {
          'light': '#0066CC',
          'dark': '#10659C'
        },
        secondary: {
          'dark': '#333333',
        },
        mute: {
          'dark': '#999999',
          'light': '#eaeaea'
        }
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}