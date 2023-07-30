/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'gray': {
          light: '#f1f9fc',
          DEFAULT: '#4e4e4e',
        },
        'green': {
          light: '#c4ddc0',
          DEFAULT: '#61ac6b',
          dark: '#2f7b3d',
        }
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
