/** @type {import('tailwindcss').Config} */
module.exports = {
content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    ],
  theme: {
    extend: {
        colors: {
            myprimary: 'rgb(var(--primary-color) / <alpha-value>)',
            mysecondary: 'rgb(var(--secondary-color) / <alpha-value>)',
            mydisabled: 'rgb(var(--disabled-color) / <alpha-value>)',
            mydark: 'rgb(var(--dark-color) / <alpha-value>)',
        },
        fontFamily: {
            sans: ['Open Sans', 'sans-serif'],
        }
    },
  },
  plugins: [],
}

