import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import resolve from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
            server: {
                strictPort: true,
                port: 3000
            },
        }),
    ],

    resolve: {
        alias: {
            '@': '/resources/js'
        }
    }
});
