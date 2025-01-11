/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
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
