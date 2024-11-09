<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

          <!-- Google Font Api KEY-->
      <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
      <!-- Config Options -->
      <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Prompt Filings&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--primary&quot;:&quot;#3a57e8&quot;,&quot;--info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>
       <link rel="shortcut icon" href="https://promptfilings.com/wp-content/uploads/2024/04/symbol-300x300.png" >
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
            <!-- Add Font Awesome CDN to the head section of your HTML -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!-- Scripts -->
        @vite([
        'resources/css/theme/custom.min.css',
        'resources/css/theme/customizer.min.css',
        'resources/css/theme/file-manager.min.css',
        'resources/css/theme/libs.min.css',
        'resources/css/theme/pf-ui.min.css',
        'resources/css/theme/pro.min.css',
        'resources/css/theme/rtl.min.css',
       
    ])
    </head>
    <body class="">
         <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
              <img src="https://promptfilings.com/wp-content/themes/astra/assets/img/loading.gif" alt="loader" class="light-loader" width="128">
          </div>
      </div>
    </div>
    <!-- loader END -->
      
     <aside class="sidebar sidebar-base " data-toggle="main-sidebar" data-sidebar="responsive">
     @include('layouts.navigation')
    
    </aside>
    <main class="main-content">
    @include('partials.header')
    {{ $slot }}
    @include('partials.footer')
    </main> 
        <script src="{{ asset('js/libs.min.js') }}"></script>
        <script src="{{ asset('js/slider-tabs.js') }}"></script>
        <script src="{{ asset('js/lodash.min.js') }}"></script>
        <script src="{{ asset('js/utility.min.js') }}"></script>
        <script src="{{ asset('js/setting.min.js') }}"></script>
        <script src="{{ asset('js/setting-init.js') }}"></script>
        <script src="{{ asset('js/external.min.js') }}"></script>
        <script src="{{ asset('js/widgetcharts.js') }}"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('js/alternate-dashboard.js') }}"></script>
        <script src="{{ asset('js/pf-ui.js') }}"></script>
        <script src="{{ asset('js/pf-uipro.js') }}"></script>
        <script src="{{ asset('js/sidebar.js') }}"></script>
        <script src="{{ asset('js/file-manager.js') }}"></script>
    </body>
</html>
