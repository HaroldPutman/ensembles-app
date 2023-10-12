const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      white: colors.white,
      black: colors.black,
      primary: {
        light: colors.blue[300],
        DEFAULT: colors.blue[500],
        dark: colors.blue[700]
      },
      success: {
        mist: colors.green[100],
        DEFAULT: colors.green[600],
        dark: colors.green[700]
      },
      error: {
        mist: colors.red[100],
        DEFAULT: colors.red[600],
        dark: colors.red[700]
      },
      secondary: {
        light: colors.green[300],
        DEFAULT: colors.green[500],
        dark: colors.green[700],
      },
      alternate: {
        light: colors.red[300],
        DEFAULT: colors.red[500],
        dark: colors.red[700]
      },
      gray: {
        mist: colors.gray[100],
        light: colors.gray[300],
        DEFAULT: colors.gray[500],
        dark: colors.gray[700]
      },
      amber: {
        mist: colors.amber[100],
        light: colors.amber[300],
        DEFAULT: colors.amber[500],
        dark: colors.amber[700]
      }
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
