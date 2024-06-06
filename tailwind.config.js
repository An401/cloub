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
            'branco': '#D9FFFF',
            'azul': '#386FA4',
            'vermelho': 'rgb(255,0,0)',
            'azulEsverdeado': '#007EA7'
        },

        borderRadius: {
            'lgg':'2rem',
            'lg': '1rem',
            'md': '0.5rem',
        },

        backgroundColor: {
            'azul': '#386FA4',
            'branco': '#D9FFFF',
            'brancoRgb': 'rgba(217,217,217,0.1)',
            'transparente': '#d9d9d921'
        },

        backgroundImage: {
            'fundo': "url(/public/img/fundo.jpg)",
        },
    },
    

    plugins: [forms],
};
