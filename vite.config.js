import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { sync as globSync } from 'glob';

const cssFiles = globSync('resources/assets/**/*.css')
const jsFiles = globSync('resources/assets/**/*.js')

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...jsFiles,
                ...cssFiles
            ],
            refresh: true,
        }),
    ],
});
