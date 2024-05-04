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
        'lg': '1.25rem',
        'xl': '1.75rem',
        '2xl': '2.125rem',
        '2.5xl': '2.375rem',
        '3xl': '2.625rem',
        '4xl': '3.125rem',
        '5xl': '3.75rem',

      },
    },
  },
  plugins: [],
}