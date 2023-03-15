/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./storage/app/pages/**/*.json",
        "./storage/app/pages/**/*.md",
    ],
    theme: {
        container: {
            center: true,
        },
        extend: {
            colors: {
                primary: "#8000FF",
                secondary: "#FFF000"
            },
            lineHeight: {
                "normal": "1.35",
            }
        },
    },
    plugins: [],
}
