import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vuePlugin from '@vitejs/plugin-vue';
import eslintPlugin from 'vite-plugin-eslint';
import autoImportPlugin from 'unplugin-auto-import/vite';
import ComponentsPlugin from 'unplugin-vue-components/vite';
import manifestSRI from 'vite-plugin-manifest-sri';

export default defineConfig({
    build: {
        minify: true,
        sourcemap: false,
    },
    plugins: [
        laravel({
            input: ['resources/application/app.ts'],
            ssr: 'resources/application/ssr.ts',
            refresh: true,
        }),
        tailwindcss(),
        vuePlugin({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        eslintPlugin(),
        autoImportPlugin({
            dts: 'resources/types/auto-imports.d.ts',
            eslintrc: {
                enabled: true,
                filepath: './.eslintrc-auto-import.js',
                globalsPropValue: true,
            },
            dirs: ['resources/composables/**/*', 'resources/utils/**/*'],
            imports: ['vue'],
        }),
        ComponentsPlugin({
            dts: 'resources/types/components.d.ts',
            dirs: ['resources/components'],
        }),
        manifestSRI({
            algorithms: ['sha384', 'sha512'],
        }),
    ],
});
