/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        "black": "#060606"
      },
      fontSize: {
        "2xs": ".625rem"
      },
      transitionProperty: {
        'underline': 'text-decoration',
      },
      transitionDuration: {
        '300': '300ms',
      },
    },
  },
  plugins: [],
}

