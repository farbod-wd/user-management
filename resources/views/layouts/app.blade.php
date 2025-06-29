<!DOCTYPE html>
<html lang="fa" class="light-style customizer-hide" dir="rtl" data-theme="theme-default"
    data-assets-path="./panel">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>user management system</title>


    <meta name="description" content="داشبورد مدیریت">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('panel/assets/img/favicon/favicon.ico') }}">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/fonts/flag-icons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/css/rtl/rtl.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/libs/sweetalert2/sweetalert2.css') }}">
    <link rel="stylesheet"
        href="{{ asset('panel/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('panel/assets/vendor/css/pages/page-auth.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/assets/css/demo.css') }}">

    <!-- JS Configs -->
    <script src="{{ asset('panel/assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('panel/assets/js/config.js') }}"></script>

</head>
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @yield('scripts')
    <!-- Core JS -->
    <script src="{{ asset('panel/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    @include('sweetalert::alert')
    <script src="{{ asset('panel/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('panel/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('panel/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('panel/assets/js/main.js') }}"></script>

    <!-- Page Specific JS -->
    <script src="{{ asset('panel/assets/js/pages-auth.js') }}"></script>
</body>

</html>
