import { createSSRApp, h, type DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

import './tailwind.css';
import 'nprogress/nprogress.css';

createInertiaApp({
    id: 'MW-UI',
    title: (title: string) => (title ? `${title} | MUJIWA` : 'MUJIWA'),
    resolve: (name: string) =>
        resolvePageComponent(
            `../pages/${name}.vue`,
            import.meta.glob<DefineComponent>('../pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        createSSRApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
    progress: {
        color: '#0099FF',
        includeCSS: false,
        showSpinner: true,
    },
});
