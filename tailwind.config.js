import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },

        colors: {
            'dark':'#555577',
            'branco': '#C4D1D7',
            'azul': '#386FA4',
        },

        backgroundColor: {
            'azul': '#386FA4',
            'branco': '#C4D1D7',
            'brancoRgb': 'rgba(217,217,217,0.1)',
        },

        backgroundImage: {
            'fundo': "url(/public/img/fundo.jpg)",
        },
    },

    plugins: [forms],
};
