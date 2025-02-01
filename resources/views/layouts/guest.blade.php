<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Google Font Api KEY-->
        <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
        <!-- Config Options -->
        <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Prompt Filings&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--primary&quot;:&quot;#00276e&quot;,&quot;info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>
        <link rel="shortcut icon" href="/img/pf-symbol.png" >
        
        <title>{{ config('app.name', 'Prompt Filings - Documents Management System') }}</title>

      
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
    <div class="wrapper">
                        {{ $slot }}
            </div>
            <!-- Live Customizer start -->
          <!-- Setting offcanvas start here -->
          <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-scroll="true"
              data-bs-backdrop="false" aria-labelledby="live-customizer-label">
              <div class="offcanvas-header">
                  <div class="d-flex align-items-center">
                      <h4 class="offcanvas-title" id="live-customizer-label">Live Customizer</h4>
                  </div>
                  <div class="d-flex gap-2 align-items-center">
                      <button class="btn btn-primary px-3" data-copy="settings" data-bs-toggle="tooltip" data-bs-placement="left"
                          title="Copy">
                          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.4"
                                  d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z"
                                  fill="currentColor"></path>
                              <path opacity="0.4"
                                  d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z"
                                  fill="currentColor"></path>
                              <path
                                  d="M14.3672 12.2364H12.6392V10.5094C12.6392 10.0984 12.3062 9.7644 11.8952 9.7644C11.4842 9.7644 11.1502 10.0984 11.1502 10.5094V12.2364H9.4232C9.0122 12.2364 8.6792 12.5704 8.6792 12.9814C8.6792 13.3924 9.0122 13.7264 9.4232 13.7264H11.1502V15.4524C11.1502 15.8634 11.4842 16.1974 11.8952 16.1974C12.3062 16.1974 12.6392 15.8634 12.6392 15.4524V13.7264H14.3672C14.7782 13.7264 15.1122 13.3924 15.1122 12.9814C15.1122 12.5704 14.7782 12.2364 14.3672 12.2364Z"
                                  fill="currentColor"></path>
                          </svg>
                          Copy Config
                      </button>
                      <button class="btn btn-primary btn-icon" data-reset="settings" data-bs-toggle="tooltip"
                          data-bs-placement="left" title="Reset All Settings">
                          <span class="btn-inner">
                              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g opacity="0.4">
                                      <path
                                          d="M4.88076 14.6713C4.74978 14.2784 4.32504 14.066 3.93208 14.197C3.53912 14.328 3.32675 14.7527 3.45774 15.1457L4.88076 14.6713ZM20.8808 15.1457C21.0117 14.7527 20.7994 14.328 20.4064 14.197C20.0135 14.066 19.5887 14.2784 19.4577 14.6713L20.8808 15.1457ZM4.16925 14.9085C3.45774 15.1457 3.45785 15.146 3.45797 15.1464C3.45802 15.1465 3.45815 15.1469 3.45825 15.1472C3.45845 15.1478 3.45868 15.1485 3.45895 15.1493C3.45948 15.1509 3.46013 15.1528 3.46092 15.1551C3.46249 15.1597 3.46456 15.1657 3.46716 15.1731C3.47235 15.188 3.47961 15.2084 3.48902 15.2341C3.50782 15.2854 3.53521 15.3576 3.5717 15.4477C3.64461 15.6279 3.7542 15.8805 3.90468 16.1814C4.2048 16.7817 4.67223 17.5836 5.34308 18.3886C6.68942 20.0043 8.88343 21.6585 12.1693 21.6585V20.1585C9.45507 20.1585 7.64908 18.8128 6.49542 17.4284C5.91627 16.7334 5.5087 16.0354 5.24632 15.5106C5.11555 15.2491 5.02201 15.0329 4.96212 14.8849C4.9322 14.811 4.91076 14.7543 4.89733 14.7177C4.89062 14.6994 4.88593 14.6861 4.88318 14.6783C4.88181 14.6744 4.88093 14.6718 4.88053 14.6706C4.88033 14.67 4.88025 14.6698 4.88029 14.6699C4.88031 14.67 4.88036 14.6701 4.88044 14.6704C4.88047 14.6705 4.88056 14.6707 4.88058 14.6708C4.88067 14.671 4.88076 14.6713 4.16925 14.9085ZM12.1693 21.6585C15.4551 21.6585 17.6491 20.0043 18.9954 18.3886C19.6663 17.5836 20.1337 16.7817 20.4338 16.1814C20.5843 15.8805 20.6939 15.6279 20.7668 15.4477C20.8033 15.3576 20.8307 15.2854 20.8495 15.2341C20.8589 15.2084 20.8662 15.188 20.8713 15.1731C20.8739 15.1657 20.876 15.1597 20.8776 15.1551C20.8784 15.1528 20.879 15.1509 20.8796 15.1493C20.8798 15.1485 20.8801 15.1478 20.8803 15.1472C20.8804 15.1469 20.8805 15.1465 20.8805 15.1464C20.8807 15.146 20.8808 15.1457 20.1693 14.9085C19.4577 14.6713 19.4578 14.671 19.4579 14.6708C19.4579 14.6707 19.458 14.6705 19.4581 14.6704C19.4581 14.6701 19.4582 14.67 19.4582 14.6699C19.4583 14.6698 19.4582 14.67 19.458 14.6706C19.4576 14.6718 19.4567 14.6744 19.4553 14.6783C19.4526 14.6861 19.4479 14.6994 19.4412 14.7177C19.4277 14.7543 19.4063 14.811 19.3764 14.8849C19.3165 15.0329 19.223 15.2491 19.0922 15.5106C18.8298 16.0354 18.4222 16.7334 17.8431 17.4284C16.6894 18.8128 14.8834 20.1585 12.1693 20.1585V21.6585Z"
                                          fill="currentColor"></path>
                                      <path
                                          d="M21.5183 19.2271C21.4293 19.2234 21.3427 19.196 21.2671 19.1465L16.3546 15.8924C16.2197 15.8026 16.1413 15.6537 16.148 15.4969C16.1546 15.34 16.2452 15.1982 16.3873 15.1202L21.5571 12.2926C21.7075 12.2106 21.8932 12.213 22.0416 12.3003C22.1907 12.387 22.2783 12.5436 22.2712 12.7096L22.014 18.7913C22.007 18.9573 21.9065 19.1059 21.7506 19.1797C21.6772 19.215 21.597 19.2305 21.5183 19.2271"
                                          fill="currentColor"></path>
                                  </g>
                                  <path
                                      d="M20.0742 10.0265C20.1886 10.4246 20.6041 10.6546 21.0022 10.5401C21.4003 10.4257 21.6302 10.0102 21.5158 9.61214L20.0742 10.0265ZM4.10803 8.88317C3.96071 9.27031 4.15513 9.70356 4.54226 9.85087C4.92939 9.99818 5.36265 9.80377 5.50996 9.41664L4.10803 8.88317ZM20.795 9.81934C21.5158 9.61214 21.5157 9.6118 21.5156 9.61144C21.5155 9.61129 21.5154 9.6109 21.5153 9.61059C21.5152 9.60998 21.515 9.60928 21.5147 9.60848C21.5143 9.60689 21.5137 9.60493 21.513 9.6026C21.5116 9.59795 21.5098 9.59184 21.5075 9.58431C21.503 9.56925 21.4966 9.54853 21.4882 9.52251C21.4716 9.47048 21.4473 9.39719 21.4146 9.3056C21.3493 9.12256 21.2503 8.8656 21.1126 8.55861C20.8378 7.94634 20.4044 7.12552 19.7678 6.29313C18.4902 4.62261 16.3673 2.87801 13.0844 2.74053L13.0216 4.23922C15.7334 4.35278 17.4816 5.77291 18.5763 7.20436C19.1258 7.92295 19.5038 8.63743 19.744 9.17271C19.8638 9.43949 19.9482 9.65937 20.0018 9.80972C20.0286 9.88483 20.0477 9.94238 20.0596 9.97951C20.0655 9.99808 20.0696 10.0115 20.072 10.0195C20.0732 10.0235 20.074 10.0261 20.0744 10.0273C20.0746 10.0278 20.0746 10.0281 20.0746 10.028C20.0746 10.0279 20.0745 10.0278 20.0745 10.0275C20.0744 10.0274 20.0744 10.0272 20.0743 10.0271C20.0743 10.0268 20.0742 10.0265 20.795 9.81934ZM13.0844 2.74053C9.80146 2.60306 7.54016 4.16407 6.12741 5.72193C5.42345 6.49818 4.92288 7.27989 4.59791 7.86704C4.43497 8.16144 4.31491 8.40923 4.23452 8.58617C4.1943 8.67471 4.16391 8.7457 4.14298 8.79616C4.13251 8.82139 4.1244 8.84151 4.11859 8.85613C4.11568 8.86344 4.11336 8.86938 4.1116 8.8739C4.11072 8.87616 4.10998 8.87807 4.10939 8.87962C4.10909 8.88039 4.10883 8.88108 4.1086 8.88167C4.10849 8.88196 4.10834 8.88234 4.10829 8.88249C4.10815 8.88284 4.10803 8.88317 4.80899 9.14991C5.50996 9.41664 5.50985 9.41692 5.50975 9.41719C5.50973 9.41725 5.50964 9.41749 5.50959 9.4176C5.5095 9.41784 5.50945 9.41798 5.50942 9.41804C5.50938 9.41816 5.50947 9.41792 5.50969 9.41734C5.51014 9.41619 5.51113 9.41365 5.51267 9.40979C5.51574 9.40206 5.52099 9.38901 5.52846 9.37101C5.5434 9.335 5.56719 9.27924 5.60018 9.20664C5.66621 9.0613 5.76871 8.84925 5.91031 8.59341C6.19442 8.08008 6.63084 7.39971 7.23855 6.72958C8.44912 5.39466 10.3098 4.12566 13.0216 4.23922L13.0844 2.74053Z"
                                      fill="currentColor"></path>
                                  <path
                                      d="M8.78337 9.33604C8.72981 9.40713 8.65805 9.46292 8.57443 9.49703L3.1072 11.6951C2.95672 11.7552 2.78966 11.7352 2.66427 11.6407C2.53887 11.5462 2.47359 11.3912 2.48993 11.2299L3.09576 5.36863C3.11367 5.19823 3.22102 5.04666 3.37711 4.97402C3.5331 4.9005 3.71173 4.91728 3.84442 5.01726L8.70581 8.68052C8.8385 8.78051 8.90387 8.94759 8.8762 9.1178C8.86358 9.19825 8.83082 9.27308 8.78337 9.33604"
                                      fill="currentColor"></path>
                              </svg>
                          </span>
                      </button>
                  </div>
                  <button type="button" class="btn-close px-0 text-reset shadow-none" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
              </div>
              <div class="offcanvas-body data-scrollbar">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="border border-2 rounded mb-3">
                              <div class="px-3 pt-3 text-center">
                                  <h5 class="d-inline-block">Style Setting</h5>
                              </div>
                              <div class="p-3">
                                  <!-- Theme start here -->
                                  <div>
                                      <h6 class="mb-3">Theme</h6>
                                      <div class="d-grid gap-3 grid-cols-3 mb-3">
                                          <div data-setting="radio">
                                              <input type="radio" value="auto" class="btn-check" name="theme_scheme"
                                                  id="color-mode-auto" checked>
                                              <label class="btn btn-border d-block" for="color-mode-auto">
                                                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                                                  </svg>
                                                  Auto
                                              </label>
                                          </div>
                                          <div data-setting="radio">
                                              <input type="radio" value="dark" class="btn-check" name="theme_scheme"
                                                  id="color-mode-dark">
                                              <label class="btn btn-border d-block" for="color-mode-dark">
                                                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path fill="currentColor"
                                                          d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                                                  </svg>
                                                  Dark
                                              </label>
                                          </div>
                                          <div data-setting="radio">
                                              <input type="radio" value="light" class="btn-check" name="theme_scheme"
                                                  id="color-mode-light">
                                              <label class="btn  btn-border d-block" for="color-mode-light">
                                                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path fill="currentColor"
                                                          d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z">
                                                      </path>
                                                  </svg>
                                                  Light
                                              </label>
                                          </div>
                                      </div>
                                      <div class="d-grid gap-3 grid-cols-2 mb-4">
                                          <div data-setting="attribute" class="text-center">
                                              <input type="radio" value="ltr" class="btn-check" name="theme_scheme_direction"
                                                  data-prop="dir" id="theme-scheme-direction-ltr" checked>
                                              <label class="btn btn-border d-block p-0" for="theme-scheme-direction-ltr">
                                                  <img src="../../assets/images/settings/dark/01.png" alt="ltr"
                                                      class="mode dark-img img-fluid" width="200" height="200" loading="lazy">
                                                  <img src="../../assets/images/settings/light/01.png" alt="ltr"
                                                      class="mode light-img img-fluid" width="200" height="200" loading="lazy">
                                              </label>
                                              <span class=" mt-2"> LTR </span>
                                          </div>
                                          <div data-setting="attribute" class="text-center">
                                              <input type="radio" value="rtl" class="btn-check" name="theme_scheme_direction"
                                                  data-prop="dir" id="theme-scheme-direction-rtl">
                                              <label class="btn btn-border d-block p-0" for="theme-scheme-direction-rtl">
                                                  <img src="../../assets/images/settings/dark/02.png" alt="ltr"
                                                      class="mode dark-img img-fluid" width="200" height="200" loading="lazy">
                                                  <img src="../../assets/images/settings/light/02.png" alt="ltr"
                                                      class="mode light-img img-fluid" width="200" height="200" loading="lazy">
                                              </label>
                                              <span class=" mt-2"> RTL </span>
                                          </div>
                                      </div>
                                  </div>
          
                                  <!-- Theme end here -->
          
                                  <hr class="hr-horizontal">
          
                                  <!-- Color customizer start here -->
          
                                  <div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <h6 class="mt-4 mb-3">Color Customizer</h6>
                                          <div class="d-flex align-items-center">
                                              <a href="#custom-color" data-bs-toggle="collapse" role="button"
                                                  aria-expanded="false" aria-controls="custom-color">Custom</a>
                                              <div data-setting="radio">
                                                  <input type="radio" value="default" class="btn-check"
                                                      name="theme_color" id="theme-color-default"
                                                      data-colors='{"primary": "#7093e5", "secondary": "#f68685"}'>
                                                  <label class="btn bg-transparent px-2 border-0" for="theme-color-default"
                                                      data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Color"
                                                      data-bs-original-title="Reset color">
                                                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg">
                                                          <path
                                                              d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                                              fill="#31BAF1" />
                                                          <path
                                                              d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                                              fill="#0169CA" />
                                                      </svg>
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="collapse" id="custom-color">
                                          <div class="form-group d-flex justify-content-between align-items-center">
                                              <label class="" for="custom-primary-color">Primary</label>
                                              <input class="" name="theme_color" data-extra="primary" type="color"
                                                  id="custom-primary-color" value="#00276e" data-setting="color">
                                          </div>
                                          <div class="form-group d-flex justify-content-between align-items-center">
                                              <label class="" for="custom-secondary-color">Secondary</label>
                                              <input class="" name="theme_color" data-extra="secondary" type="color"
                                                  id="custom-secondary-color" value="#8a92a6" data-setting="color">
                                          </div>
                                          <div class="form-group d-flex justify-content-between align-items-center">
                                              <label class="" for="custom-success-color">Success</label>
                                              <input class="" name="theme_color" data-extra="success" type="color"
                                                  id="custom-success-color" value="#1aa053" data-setting="color">
                                          </div>
                                          <div class="form-group d-flex justify-content-between align-items-center">
                                              <label class="" for="custom-danger-color">Danger</label>
                                              <input class="" name="theme_color" data-extra="danger" type="color"
                                                  id="custom-danger-color" value="#c03221" data-setting="color">
                                          </div>
                                          <div class="form-group d-flex justify-content-between align-items-center">
                                              <label class="" for="custom-warning-color">Warning</label>
                                              <input class="" name="theme_color" data-extra="warning" type="color"
                                                  id="custom-warning-color" value="#f16a1b" data-setting="color">
                                          </div>
                                          <div class="form-group d-flex justify-content-between align-items-center">
                                              <label class="" for="custom-info-color">Info</label>
                                              <input class="" name="theme_color" data-extra="info" type="color"
                                                  id="custom-info-color" value="#08B1BA" data-setting="color">
                                          </div>                                                                
                                      </div>
                                      <div class="grid-cols-5 mb-4 d-grid gap-3">
                                          <div data-setting="radio">
                                              <input type="radio" value="color-1" class="btn-check" name="theme_color"
                                                  id="theme-color-1">
                                              <label class="btn btn-border d-block bg-transparent" for="theme-color-1"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-1"
                                                  data-bs-original-title="Theme-1">
                                                  <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 24 24" width="26" height="26">
                                                      <circle cx="12" cy="12" r="10" fill="#00C3F9" />
                                                      <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF" />
                                                  </svg>
                                              </label>
                                          </div>
                                          <div data-setting="radio">
                                              <input type="radio" value="color-2" class="btn-check" name="theme_color"
                                                  id="theme-color-2">
                                              <label class="btn btn-border d-block bg-transparent" for="theme-color-2"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-2"
                                                  data-bs-original-title="Theme-2">
                                                  <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 24 24" width="26" height="26">
                                                      <circle cx="12" cy="12" r="10" fill="#91969E" />
                                                      <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00" />
                                                  </svg>
                                              </label>
                                          </div>
                                          <div data-setting="radio">
                                              <input type="radio" value="color-3" class="btn-check" name="theme_color"
                                                  id="theme-color-3">
                                              <label class="btn btn-border d-block bg-transparent" for="theme-color-3"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-3"
                                                  data-bs-original-title="Theme-3">
                                                  <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 24 24" width="26" height="26">
                                                      <circle cx="12" cy="12" r="10" fill="#DB5363" />
                                                      <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0" />
                                                  </svg>
                                              </label>
                                          </div>
                                          <div data-setting="radio">
                                              <input type="radio" value="color-4" class="btn-check" name="theme_color"
                                                  id="theme-color-4">
                                              <label class="btn btn-border d-block bg-transparent" for="theme-color-4"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-4"
                                                  data-bs-original-title="Theme-4">
                                                  <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 24 24" width="26" height="26">
                                                      <circle cx="12" cy="12" r="10" fill="#EA6A12" />
                                                      <path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1" />
                                                  </svg>
                                              </label>
                                          </div>
                                          <div data-setting="radio">
                                              <input type="radio" value="color-5" class="btn-check" name="theme_color"
                                                  id="theme-color-5">
                                              <label class="btn btn-border d-block bg-transparent" for="theme-color-5"
                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-5"
                                                  data-bs-original-title="Theme-5">
                                                  <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 24 24" width="26" height="26">
                                                      <circle cx="12" cy="12" r="10" fill="#E586B3" />
                                                      <path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799" />
                                                  </svg>
                                              </label>
                                          </div>
                                      </div>
                                  </div>
          
                                 
          
                                  <!-- Color customizer end here -->
          
          
          
                                  <!-- Active Menu Style end here -->
          
                                  <hr class="hr-horizontal">
                                  <!-- Card style start here -->
                                  <div class="mb-4">
                                      <div class="mt-4 mb-3">
                                          <h6 class="d-inline-block mb-0 me-2">Card Style</h6>
                                          <small class="badge bg-warning rounded-pill">Pro</small>
                                      </div>
                                      <div class="d-grid gap-3 grid-cols-2 mb-3">
                                          <div data-setting="radio">
                                              <input type="radio" value="card-default" class="btn-check" name="card_color"
                                                  id="card-default" checked>
                                              <label class="btn btn-border d-block" for="card-default" data-bs-toggle="tooltip"
                                                  data-bs-placement="top" title="Card White" data-bs-original-title="Card White">
                                                  <span>Default Style</span>
                                              </label>
                                          </div>
                                          <div data-setting="radio">
                                              <input type="radio" value="card-glass" class="btn-check" name="card_color"
                                                  id="card-glass">
                                              <label class="btn btn-border d-block" for="card-glass" data-bs-toggle="tooltip"
                                                  data-bs-placement="top" title="Card Glass" data-bs-original-title="Card Glass">
                                                  <span>Glass Effect</span>
                                              </label>
                                          </div>
                                      </div>
                                      <div data-setting="radio">
                                          <input type="radio" value="card-transparent" class="btn-check" name="card_color"
                                              id="card-transparent">
                                          <label class="btn btn-border d-block" for="card-transparent" data-bs-toggle="tooltip"
                                              data-bs-placement="top" title="Card Transparent"
                                              data-bs-original-title="Card Transparent">
                                              <span>Transparent Style</span>
                                          </label>
                                      </div>
                                  </div>
                                  <!-- Card style end here -->
          
          
                                  <hr class="hr-horizontal">
          
                                  <!-- Page Animation start here -->
                                  <div class="mt-4 mb-3">
                                      <h6 class="d-inline-block mb-0 me-2">Footer </h6>
                                      <small class="badge bg-warning rounded-pill">Pro</small>
                                  </div>
                                  <div class="d-grid gap-3 grid-cols-3 mb-4">
                                      <div data-setting="radio">
                                          <input type="radio" value="default" class="btn-check" name="footer" id="footer_default"
                                              checked>
                                          <label class="btn btn-border d-block" for="footer_default">Default</label>
                                      </div>
                                      <div data-setting="radio">
                                          <input type="radio" value="sticky" class="btn-check" name="footer" id="footer_Sticky">
                                          <label class="btn btn-border d-block" for="footer_Sticky">Sticky</label>
                                      </div>
                                      <div data-setting="radio">
                                          <input type="radio" value="glass" class="btn-check" name="footer" id="footer_glass">
                                          <label class="btn btn-border d-block" for="footer_glass">Glass</label>
                                      </div>
                                  </div>
                                  <!-- Page Animation start here -->
                              </div>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="border border-2 rounded">
                              <div class="px-3 pt-3 d-flex align-items-center justify-content-center gap-2">
                                  <h5 class="mb-0">Advanced</h5>
                                  <span class="badge rounded-pill bg-warning">Pro</span>
                              </div>
                              <div class="p-3">
                                  <h6 class="mb-3 d-inline-block">App Name</h6>
                                  <span data-bs-toggle="tooltip" data-bs-placement="right"
                                      title="Edit the App Name with your business name to familiarize your audience. ">
                                      <svg class="icon-20" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                          viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                          <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                      </svg>
                                  </span>
                                  <div class="d-grid gap-3 grid-cols-1 mb-4">
                                      <div class="form-group mb-0">
                                          <input type="text" data-setting="input" maxlength="10" name="app_name"
                                              class="form-control" value="">
                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-between">
                                      <h6 class="d-inline-block">Font</h6>
                                      <a href="javascript:void(0)" data-reset="body-heading-font">
                                          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path
                                                  d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                                  fill="currentColor" />
                                              <path
                                                  d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                                  fill="currentColor" />
                                          </svg>
                                      </a>
                                  </div>
                                  <div class="d-grid gap-3 grid-cols-2 mb-4">
                                      <div>
                                          <div class="d-flex justify-content-between align-items-center mb-2">
                                              <div class="label">
                                                  <label class="mb-0 d-inline-block">Body Font</label>
                                              </div>
                                          </div>
                                          <div class="form-group mb-0">
                                              <select name="body_font_family" class="form-control" data-select="font"
                                                  data-setting="select">
                                                  <option value="">Select Body Font</option>
                                              </select>
                                          </div>
                                      </div>
          
                                      <div>
                                          <div class="d-flex justify-content-between align-items-center mb-2">
                                              <div class="label">
                                                  <label class="mb-0 d-inline-block">Heading Font</label>
                                              </div>
                                          </div>
                                          <div class="form-group mb-0">
                                              <select name="heading_font_family" class="form-control" data-select="font"
                                                  data-setting="select">
                                                  <option value="">Select Heading Font</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
          
          
                                  <!-- Style appearance start here -->
          
                                  <div>
                                      <h6 class="d-inline-block mb-3 me-2">Style Appearance </h6>
                                      <small class="badge bg-warning rounded-pill">Pro</small>
                                  </div>
                                  <div class="d-grid gap-3 grid-cols-3 mb-4">
                                      <div data-setting="checkbox">
                                          <input type="checkbox" value="theme-flat" class="btn-check"
                                              name="theme_style_appearance" id="theme-style-appearance-flat">
                                          <label class="btn btn-border d-block" for="theme-style-appearance-flat">Flat</label>
                                      </div>
                                      <div data-setting="checkbox">
                                          <input type="checkbox" value="theme-bordered" class="btn-check"
                                              name="theme_style_appearance" id="theme-style-appearance-bordered">
                                          <label class="btn btn-border d-block"
                                              for="theme-style-appearance-bordered">Bordered</label>
                                      </div>
                                      <div data-setting="checkbox">
                                          <input type="checkbox" value="theme-sharp" class="btn-check"
                                              name="theme_style_appearance" id="theme-style-appearance-sharp">
                                          <label class="btn btn-border d-block" for="theme-style-appearance-sharp">Sharp</label>
                                      </div>
                                  </div>
          
                                  <!-- Style appearance end here -->
          
                                  <!-- Page Animation start here -->
                                  <div>
                                      <h6 class="d-inline-block mb-3 me-2">Page Transition </h6>
                                      <small class="badge bg-warning rounded-pill">Pro</small>
                                  </div>
                                  <div class="d-grid gap-3 grid-cols-2 mb-4">
                                      <div data-setting="radio">
                                          <input type="radio" value="theme-with-animation" class="btn-check"
                                              name="theme_transition" id="page-animation" checked>
                                          <label class="btn btn-border d-block" for="page-animation">Animation</label>
                                      </div>
                                      <div data-setting="radio">
                                          <input type="radio" value="theme-without-animation" class="btn-check"
                                              name="theme_transition" id="without-page-animation">
                                          <label class="btn btn-border d-block" for="without-page-animation">No Animation</label>
                                      </div>
                                  </div>
                                  <!-- Page Animation start here -->
          
                                  <div>
                                      <h6 class="mb-3 d-inline-block">Storage</h6>
                                      <span data-bs-toggle="tooltip" data-bs-placement="right"
                                          title="You can save the setting changes you made for your project on either Local storage, Session storage.">
                                          <svg class="icon-20" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                              <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                      </span>
                                  </div>
                                  <div class="d-grid gap-3 grid-cols-3 mb-4">
                                      <div data-setting="radio">
                                          <input type="radio" value="localStorage" class="btn-check" name="saveLocal"
                                              id="save-localstorage">
                                          <label class="btn btn-border d-block" for="save-localstorage">Local</label>
                                      </div>
                                      <div data-setting="radio">
                                          <input type="radio" value="sessionStorage" class="btn-check" name="saveLocal"
                                              id="save-sessionstorage">
                                          <label class="btn btn-border d-block" for="save-sessionstorage">Session</label>
                                      </div>
                                      <div data-setting="radio">
                                          <input type="radio" value="none" class="btn-check" name="saveLocal" id="save-none"
                                              checked>
                                          <label class="btn btn-border d-block" for="save-none">None</label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    
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
