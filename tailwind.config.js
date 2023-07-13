const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/*.antlers.php',
        './resources/views/**/*.antlers.html'
    ],

    theme: {
        extend: {
        },
    },

    plugins: [],
};
