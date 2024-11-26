import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Lato', ...defaultTheme.fontFamily.sans],
        header: ['Lato', 'sans-serif']
      },
    },
  },
  plugins: [],
  // plugins: [
  //   plugin(function ({ addUtilities }) {
  //     addUtilities({
  //       'html': {
  //         'font-size': '62.5%'
  //       }
  //     });
  //   })
  // ],
};
