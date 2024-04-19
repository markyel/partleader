import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
/*    server: {
        host: '0.0.0.0',
        hmr: {
            host: 'localhost'
        }
    },*/
    watch: {
        usePolling: true
    },
    server: {
        https: false,
        host: true,
        port: 5173,
        hmr: {host: 'localhost', protocol: 'ws'},
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),


    ],
});
