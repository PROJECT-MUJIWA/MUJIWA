import { createSSRApp, h, type DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { renderToString } from '@vue/server-renderer';
import createServer from '@inertiajs/vue3/server';

import './tailwind.css';
import 'nprogress/nprogress.css';

createServer((page) => {
    return createInertiaApp({
        page,
        render: renderToString,
        id: 'MW-UI',
        title: (title: string) => (title ? `${title} | MUJIWA` : 'MUJIWA'),
        resolve: (name: string) =>
            resolvePageComponent(
                `../pages/${name}.vue`,
                import.meta.glob<DefineComponent>('../pages/**/*.vue'),
            ),
        setup({ App, props, plugin }) {
            return createSSRApp({ render: () => h(App, props) }).use(plugin);
        },
        progress: {
            color: '#0099FF',
            includeCSS: false,
            showSpinner: true,
        },
    });
});
