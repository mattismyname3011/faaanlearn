const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./node_modules/flowbite/**/*.js",
    ],
    plugins: [
        require('flowbite/plugin')
    ],

    theme: {
        extend: {
            spacing:{
                '128': '30rem',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'profile-picture': "url('/images/profile-picture.jpg')",
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
