/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.{vue,js,ts,jsx,tsx}",
        "./resources/js/components/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
        extend: {
            maxWidth: {
                full: "100%",
            },
            colors: {
                primary: "hsla(160, 100%, 37%, 1)",
            },
        },
    },
    plugins: [],
};
