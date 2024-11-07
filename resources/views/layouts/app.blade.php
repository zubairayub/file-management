<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite([
        'resources/css/app.css', // Main Laravel CSS
        'resources/js/app.js',   // Main Laravel JS
        // Theme CSS files
        'resources/css/theme/custom.min.css',
        'resources/css/theme/customizer.min.css',
        'resources/css/theme/file-manager.min.css',
        'resources/css/theme/libs.min.css',
        'resources/css/theme/pf-ui.min.css',
        'resources/css/theme/pro.min.css',
        'resources/css/theme/rtl.min.css',
        // Theme JS files
        'resources/js/theme/alternate-dashboard.js',
        'resources/js/theme/dashboard.js',
        'resources/js/theme/external.min.js',
        'resources/js/theme/file-manager.js',
        'resources/js/theme/libs.min.js',
        'resources/js/theme/lodash.min.js',
        'resources/js/theme/pf-ui.js',
        'resources/js/theme/pf-uipro.js',
        'resources/js/theme/setting.min.js',
        'resources/js/theme/setting-init.js',
        'resources/js/theme/sidebar.js',
        'resources/js/theme/slider-tabs.js',
        'resources/js/theme/utility.min.js',
        'resources/js/theme/widgetcharts.js'
    ])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
            @yield('content')
            </main>
        </div>
    </body>
</html>
