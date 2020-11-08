module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {},
    backgroundColor: theme => ({
    ...theme('colors'),
    'primary': '#3490dc',
    'secondary': '#ffed4a',
    'danger': '#e3342f',
    })
  },
  variants: {},
  plugins: [],
}
