import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue"; // Import the Vue plugin

export default defineConfig({
    plugins: [
        vue(), // Use the Vue plugin
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
    build: {
        outDir: "public/dist", // Output built assets to public/dist
    },
    server: {
        proxy: {
            "/app": "http://localhost", // Proxy requests to your Laravel app
        },
    },
    base: process.env.NODE_ENV === "production" ? "/dist/" : "/", // Adjust base path based on environment
});
