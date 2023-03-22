/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "primary": "#071F43",
                "secondary": "#EFEFEF",
            },
            fontFamily: {
                "roboto": ["'Roboto'","sans-serif"],
            }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        require("daisyui")
    ],
    daisyui: {
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
    },
    prefix:"pphat-"
}
