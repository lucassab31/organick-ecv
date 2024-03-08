import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                yellowtail: ["Yellowtail"],
            },
            colors: {
                "ds-blue": "#274C5B",
                "ds-green": "#7EB693",
                "ds-yellow": "#EFD372",
                "ds-grey": "#D4D4D4",
                "ds-white": "#F9F8F8",
                "ds-off-white": "#EFF6F1",
                "ds-dark": "#525C60",
            },
            fontSize: {
                h1: [
                    "70px",
                    {
                        lineHeight: "1.2em",
                        fontWeight: "800",
                    },
                ],
                h2: [
                    "50px",
                    {
                        lineHeight: "1.2em",
                        fontWeight: "800",
                    },
                ],
                h3: [
                    "40px",
                    {
                        lineHeight: "1.2em",
                        fontWeight: "800",
                    },
                ],
                h4: [
                    "35px",
                    {
                        lineHeight: "1.2em",
                        fontWeight: "800",
                    },
                ],
                h5: [
                    "30px",
                    {
                        lineHeight: "1.2em",
                        fontWeight: "800",
                    },
                ],
                h6: [
                    "25px",
                    {
                        lineHeight: "1.2em",
                        fontWeight: "800",
                    },
                ],
                base: [
                    "18px",
                    {
                        lineHeight: "1.65em",
                    },
                ],
                quotes: [
                    "20px",
                    {
                        lineHeight: "1.65em",
                    },
                ],
                btn: ["20px"],
            },
        },
    },

    plugins: [forms],
};
