module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
      './resources/**/*.scss',
    ],
  },
  mode: 'jit',
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      // '2xl': '1440px',
    },
    extend: {
      colors: {
        'c-blue' : {
          100: '#1F3D55',
        },
        'c-red' : {
          100: '#C65956',
        },
        'c-tan' : {
          50: '#FFFEFC',
          100: '#F8F3ED',
          200: '#E3DFD7',
        }
      },
      fontFamily: {
        'gt' : ['GT America', 'serif'],
        'rec' : ['Recoleta', 'serif'],
        'robot' : ['Roboto Mono', 'monospace'],
      },
      maxWidth: {
        'sm/2' : '320px',
        'md/2' : '384px',
        'lg/2' : '512px',
        'lg-2/3' : '682.666667px',
        'xl/2' : '640px',
        '2xl/2': '720px',
      },
      width: {
        'sm/2' : '320px',
        'md/2' : '384px',
        'lg/2' : '512px',
        'lg-2/3' : '682.666667px',
        'xl/2' : '640px',
        '2xl/2': '768px',
      },
      boxShadow: {
        frame: '0 14px 34px 0 rgba(0, 0, 0, 0.1)',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
