/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      colors: {
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"},
        customGrey: {"100":"#EAEAEA", "200":"#E0E0E0", "300":"#d9d7d7", "400":"#F2F2F2", },
        customDarkGrey: {"700":"#4D4D4F", },

      }, // Extend Tailwind's default colors
      width: {
        '100%': '100%', '90%': '90%', '80%': '80%', '75%': '75%', '70%': '70%','60%': '60%','50%': '50%','40%': '40%','30%': '30%','25%': '25%','20%': '20%','10%': '10%',
      },
      height: {
        '400' : '25rem' ,'420' : '26.25rem', '450' : '28.125rem', '480' : '30rem', '500' : '31.25rem', '520' : '32.5rem', '550' : '34.375rem', '580' : '36.25rem', '600' : '37.5rem', '620' : '38.75rem', '650' : '40.625rem', '680' : '42.5rem', '700' : '43.75rem', '720' : '45rem', '750' : '46.875rem', '780' : '48.75rem', '800' : '50rem',
      },
      borderRadius: {
        '56' : '56px',
      }
    },
  },
  fontFamily: {
    'body': [
      'Proxima Nova', 'sans-serif',
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
      'Noto Color Emoji'
    ],
    'sans': [
      'Proxima Nova', 'sans-serif',
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
      'Noto Color Emoji'
    ]
  },
  plugins: [
    import('flowbite/plugin.js'),
    require('tailwind-scrollbar'),
    require('tailwindcss-animated'),

  ],
};

export default config;
