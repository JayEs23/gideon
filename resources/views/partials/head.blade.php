<!-- resources/views/partials/head.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Gideon Ihuarulam Training & Consultancy" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/gideonLogoIcon.png') }}" />

    <!-- Libs CSS -->
    <link href="{{ asset('/public/assets/libs/flatpickr/dist/flatpickr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <script src="{{ asset('assets/js/vendors/darkMode.js') }}"></script>

    <title>@yield('title', ' Learning Management System')</title>
    <link rel="canonical" href="@yield('canonical', url()->current())" />
    @stack('styles') <!-- For additional styles if needed -->
</head>