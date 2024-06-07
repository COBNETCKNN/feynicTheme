module.exports = {
  content: require('fast-glob').sync([
      './**/*.php'
  ]),
  darkMode: 'class',
  theme: {
    screens: {
      xs: '370px',
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px'
    },
    container: {
    },
    extend: {
      fontFamily: {
        averta: ["Muli", "sans-serif"],
      },
      colors: {
        blue: '#0086D6',
        brown: '#DEDEDE',
        darkbg: '1E1E1E',
      },
      fontSize: {
        'xs': '0.875rem',
        'sm': '1rem',
        'lg': '1.25rem',
        '1xlg': '1.375rem',
        '2xlg': '1.5rem',
        'xl': '1.75rem',
        '1xl': '2rem',
        '2xl': '2.125rem',
        '2.5xl': '2.375rem',
        '3xl': '2.625rem',
        '4xl': '3.125rem',
        '5xl': '3.5rem',
        '5lg': '4rem',
        '6xl': '4.5rem'

      },
    },
  },
  plugins: [],
}