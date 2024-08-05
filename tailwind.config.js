const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#2D3748", // Dark Gray
                secondary: "#4A5568", // Medium Gray
                accent: "#F6E05E", // Light Yellow
                background: "#EDF2F7", // Very Light Gray
                card: "#FFFFFF", // White
                "text-primary": "#1A202C", // Black
                "text-secondary": "#2D3748", // Dark Gray
                "button-primary": "#4A5568", // Medium Gray for buttons
                "button-secondary": "#F6E05E", // Light Yellow for secondary buttons
                "button-danger": "#E53E3E", // Red for danger actions
            },
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                5: "1.25rem",
                6: "1.5rem",
                7: "1.75rem",
                8: "2rem",
                9: "2.25rem",
                10: "2.5rem",
            },
        },
    },
    plugins: [],
};
