module.exports = {
  content: require('fast-glob').sync([
      './**/*.php'
  ]),
  theme: {
    container: {
    },
    extend: {
      fontFamily: {
        averta: ["Muli", "sans-serif"],
      },
      colors: {
        blue: '#0086D6',
      },
      fontSize: {
        'sm': '1rem',
        '2xl': '2.125rem',
        '3xl': '2.625rem',
        '4xl': '3.125rem',

      },
    },
  },
  plugins: [],
}