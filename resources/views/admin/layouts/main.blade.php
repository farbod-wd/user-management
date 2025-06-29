<!DOCTYPE html>
<html lang="fa" dir="rtl" data-theme="theme-default" data-assets-path="./panel">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>user management system-dashboard</title>
    <meta name="description" content="پنل مدیریتی" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('panel/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/css/rtl/rtl.css') }}" />
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('panel/assets/css/demo.css') }}" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Helpers & Config -->
    <script src="{{ asset('panel/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('panel/assets/js/config.js') }}"></script>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar Menu -->
            @include('admin.layouts.menu')

            <div class="layout-page">
                <!-- Top Navbar -->
                @include('admin.layouts.navbar')

                <!-- Main Content -->
                <div class="content-wrapper">
                    @yield('content')
                    @include('admin.footer')
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="{{ asset('panel/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('panel/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('panel/assets/js/main.js') }}"></script>
    <script src="{{ asset('panel/assets/js/dashboards-analytics.js') }}"></script>
</body>
</html>