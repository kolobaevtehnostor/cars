const host = 'localhost';

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
        host: ['0.0.0.0'],
        hmr: { host },
        port: 5173,
        strictPort: true
    },
    plugins: [
        vue(),
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
});
