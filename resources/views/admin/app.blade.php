<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.layouts.header-tag')
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}"></link>
    @routes
    <script src="{{ mix('/assets/js/app.js') }}" defer></script>
    @inertiaHead
</head>
<body class="theme-light">
@inertia
</body>
</html>
