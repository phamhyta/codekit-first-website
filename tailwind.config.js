module.exports = {
  prefix: 'tw-',
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{
        sans:['Inter','sans-serif']
      }
    },
  },
  variants: {
    extend: {
      display: ['group-hover','group-focus'],
      margin: ['group-hover'],
      visibility: ['group-hover']
    },
  },
  plugins: [],
}
