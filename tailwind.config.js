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
        brown: '#DEDEDE',
      },
      fontSize: {
        'sm': '1rem',
        'lg': '1.25rem',
        '2xlg': '1.5rem',
        'xl': '1.75rem',
        '1xl': '2rem',
        '2xl': '2.125rem',
        '2.5xl': '2.375rem',
        '3xl': '2.625rem',
        '4xl': '3.125rem',
        '5xl': '3.75rem',
        '6xl': '4.5rem'

      },
    },
  },
  plugins: [],
}