import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js', // Your main JS file where jQuery is imported
                'resources/css/theme/custom.min.css',
                'resources/css/theme/customizer.min.css',
                'resources/css/theme/file-manager.min.css',
                'resources/css/theme/libs.min.css',
                'resources/css/theme/pf-ui.min.css',
                'resources/css/theme/pro.min.css',
                'resources/css/theme/rtl.min.css',
                'resources/js/theme/libs.min.js',
                'resources/js/theme/utility.min.js',
                'resources/js/theme/external.min.js',
                'resources/js/theme/setting.min.js',
                'resources/js/theme/pf-ui.js',
                'resources/js/theme/sidebar.js',
                'resources/js/theme/dashboard.js',
                'resources/js/theme/alternate-dashboard.js',
                'resources/js/theme/setting-init.js',  
                'resources/js/theme/lodash.min.js',
                'resources/js/theme/slider-tabs.js',          
                'resources/js/theme/widgetcharts.js',
                'resources/js/theme/pf-uipro.js',
                'resources/js/theme/file-manager.js',  
            ],
            refresh: true,
        }),
    ],
});
