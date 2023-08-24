import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                blue: "#007BFF",
                "light-blue": "#3EA6FF",
                turquoise: "#30D5C8",
            },
            gradientColorStops: (theme) => ({
                ...theme("colors"),
                "fade-blue-turquoise": "#007BFF",
                "fade-light-blue": "#3EA6FF",
                "fade-turquoise": "#30D5C8",
            }),
        },
    },

    plugins: [forms, typography],
};
