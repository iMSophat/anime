/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
      extend: {
        colors: {
          "primary": "#071F43",
          "secondary": "#EFEFEF",
        }
      },
  },
  plugins: [],
}
