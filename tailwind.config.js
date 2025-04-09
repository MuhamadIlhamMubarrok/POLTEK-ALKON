/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#129A6A", // Warna utama
                secondary: "#73928A", // Warna sekunder
                accent: "#A5BBB6", // Warna aksen
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"], // Font Poppins
                dmsans: ["DM Sans", "sans-serif"], // Font DM Sans
                montserrat: ["Montserrat", "sans-serif"], // Font DM Sans
                mongo: ["MangoGrotesque", "sans-serif"],
            },
            animation: {
                marquee: "marquee 15s linear infinite",
            },
            keyframes: {
                marquee: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
            },
        },
    },
    plugins: [],
};
