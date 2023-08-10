import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue"; // Import the Vue plugin

export default defineConfig({
    plugins: [
        vue(), // Add the Vue plugin here
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});
