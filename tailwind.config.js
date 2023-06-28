/** @type {import('tailwindcss').Config} */

const colors = require("tailwindcss/colors");

module.exports = {
    content: ["./**/*.php"],
    theme: {
        colors: {
            ...colors,
            blue: "#369edc",
            secondaryBlue: "#35979c",
            lightblue: "#57c1c6",
            purple: "#7e5bef",
            pink: "#ff49db",
            orange: "#ff7849",
            green: "#2E9643",
            yellow: "#ffc82c",
            "gray-dark": "#273444",
            gray: "#8492a6",
            "gray-light": "#d3dce6",
            darkBack: "#383E45",
        },

        container: {
            center: true,
        },
        extend: {},
    },
    plugins: [],
};
