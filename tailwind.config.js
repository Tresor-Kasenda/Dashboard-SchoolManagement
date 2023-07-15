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
            animation: {
                blob: "blob 4s infinite"
            },
            keyFrames: {
                blob: {
                    '0%': {
                        transform: "scale(1)"
                    },
                    '33%': {
                        transform: "scale(1.1)"
                    },
                    '66%': {
                        transform: "scale(0.9)"
                    },
                    '100%': {
                        transform: "scale(1)"
                    },
                }
            }
        },
    },

    plugins: [forms],
};
