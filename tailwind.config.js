/** @type {import('tailwindcss').Config} */
module.exports = {
content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    ],
  theme: {
    extend: {
        colors: {
            myprimary: '#072D6E',
            mysecondary: '#F5F7FB',
            mydisabled: '#697790',
            mydark: '#1B1B1B',
        },
        fontFamily: {
            sans: ['Open Sans', 'sans-serif'],
        }
    },
  },
  plugins: [],
}

