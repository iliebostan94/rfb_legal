/** @type {import('tailwindcss').Config} config */
const config = {
  content: [
    './index.php',
    './app/**/*.php',
    './resources/**/*.{php,vue,js}',
    './node_modules/flowbite/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#eff6ff',
          100: '#dbeafe',
          200: '#bfdbfe',
          300: '#93c5fd',
          400: '#60a5fa',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
          800: '#1e40af',
          900: '#1e3a8a',
          950: '#172554',
        },
        customGrey: {
          100: '#EAEAEA',
          200: '#E0E0E0',
          300: '#d9d7d7',
          400: '#F2F2F2',
        },
        customDarkGrey: { 700: '#4D4D4F' },
        brandBlue: '#1b355d',
        secondaryBlue: '#5F6D90',
        cloudBlue: '#949fb5',
        lightBlue: '#d9e4f9',
        accentGold: '#EAB940',
        lightGold: '#D6C180',
        black: '#131313',
        darkGrey: '#4D4D4F',
        utilityGrey: '#777777',
        lightGrey: '#E0E0E0',
        cloudGrey: '#F2F2F2',

      }, // Extend Tailwind's default colors
      fontSize: {
        '32px': '32px',
        '40px': '40px',
      },
      width: {
        '100%': '100%',
        '90%': '90%',
        '80%': '80%',
        '75%': '75%',
        '70%': '70%',
        '60%': '60%',
        '50%': '50%',
        '40%': '40%',
        '30%': '30%',
        '25%': '25%',
        '20%': '20%',
        '10%': '10%',
<<<<<<< HEAD
        '356px': '356px',
        '858px': '858px',
        '904px': '904px',
        '1280px': '1280px',
        '1310px': '1310px',
        '1440px': '1440px',
      },
      maxWidth: {
        '60%': '60%',
        '1050px': '1050px',
      },
      height: {
        354: '354px',
=======
      },
      height: {
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
        400: '25rem',
        420: '26.25rem',
        450: '28.125rem',
        480: '30rem',
        500: '31.25rem',
        520: '32.5rem',
        550: '34.375rem',
        580: '36.25rem',
        600: '37.5rem',
        620: '38.75rem',
        650: '40.625rem',
        680: '42.5rem',
        700: '43.75rem',
        720: '45rem',
        750: '46.875rem',
        780: '48.75rem',
        800: '50rem',
<<<<<<< HEAD
      },
      padding: {
        '72px': '72px',
      },
      margin: {
        'mobile-header-custom-height' : '92px',
        '72px': '72px',
        '10%': '10%',
        '15%': '15%',
        '20%': '20%',
        '25%' : '25%',
        '50%' : '50%',
        '75%' : '75%',
        '100%' : '100%',
=======
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
      },
      borderRadius: {
        56: '56px',
      },
      aspectRatio: {
<<<<<<< HEAD
        '1/1': '1 / 1', '2/1': '2 / 1', '3/2': '3 / 2', '4/3': '4 / 3', '16/9': '16 / 9', '21/9': '21 / 9',
=======
        '1/1': '1 / 1', '2/1': '2 / 1', '4/3': '4 / 3', '16/9': '16 / 9', '21/9': '21 / 9',
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
      },
    },
  },
  fontFamily: {
    body: [
<<<<<<< HEAD
      'proxima-nova',
=======
      'Proxima Nova',
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
      'sans-serif',
      'Inter',
      'ui-sans-serif',
      'system-ui',
      '-apple-system',
      'system-ui',
      'Segoe UI',
      'Roboto',
      'Helvetica Neue',
      'Arial',
      'Noto Sans',
      'Apple Color Emoji',
      'Segoe UI Emoji',
      'Segoe UI Symbol',
      'Noto Color Emoji',
    ],
    sans: [
<<<<<<< HEAD
      'proxima-nova',
=======
      'Proxima Nova',
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
      'sans-serif',
      'Inter',
      'ui-sans-serif',
      'system-ui',
      '-apple-system',
      'system-ui',
      'Segoe UI',
      'Roboto',
      'Helvetica Neue',
      'Arial',
      'Noto Sans',
      'sans-serif',
      'Apple Color Emoji',
      'Segoe UI Emoji',
      'Segoe UI Symbol',
      'Noto Color Emoji',
    ],
  },
  plugins: [
    require('flowbite/plugin'),
    require('tailwind-scrollbar'),
    require('tailwindcss-animated'),
  ],
};

export default config;
