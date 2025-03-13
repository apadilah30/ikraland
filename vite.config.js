import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true // hidden warn deprecated
            }
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    // server: {
    //     host: '192.168.1.10',
    //     port: 5173,
    //     strictPort: true,
    //     cors: true
    // },
});
