/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                lufga: ["Lufga", "sans-serif"],
            },
        },
    },
    plugins: [],
};
