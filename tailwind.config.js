const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                104: "26rem",
                112: "28rem",
                120: "30rem",
                144: "36rem",
                168: "42rem",
                192: "48rem",
            },
            colors: {
                secondary: "#333333",
                "icon-button": "#C54044",
                button: "#343434",
            },
            backgroundImage: {
                "hero-user": "url('/images/Userbg.png')",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
