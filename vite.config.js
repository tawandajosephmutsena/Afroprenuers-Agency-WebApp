import { defineConfig } from "vite";
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.jsx",
                "resources/css/filament/admin/theme.css"
            ],
            refresh: true,
        }),
        react(),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['react', 'react-dom'],
                    utilities: ['@alpinejs/focus', '@fullcalendar/core']
                }
            }
        },
        chunkSizeWarningLimit: 1000
    }
});
