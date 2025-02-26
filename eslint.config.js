import vuePlugin from 'eslint-plugin-vue';
import prettierVue from '@vue/eslint-config-prettier';
import eslintAutoImport from './.eslintrc-auto-import.js';
import globals from 'globals';

import {
    defineConfigWithVueTs,
    vueTsConfigs,
} from '@vue/eslint-config-typescript';

export default defineConfigWithVueTs(
    vuePlugin.configs['flat/strongly-recommended'],
    vueTsConfigs.recommended,
    {
        languageOptions: {
            globals: {
                ...eslintAutoImport.globals,
                ...globals.browser,
                ...globals.node,
            },
        },
        rules: {
            'vue/multi-word-component-names': 'off',
            '@typescript-eslint/no-explicit-any': 'off',
        },
    },
    prettierVue,
);
