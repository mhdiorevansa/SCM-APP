import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/app-dark.css",
                "resources/css/iconly.css",
                "resources/js/app.js",
                "resources/js/bootstrap.js",
                "resources/js/apexcharts.min.js",
                "resources/js/dashboard.js",
            ],
            refresh: true,
        }),
    ],
});
