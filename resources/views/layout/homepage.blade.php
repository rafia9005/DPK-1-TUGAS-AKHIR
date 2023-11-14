<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>{{ $title }}</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('/home/assets/css/bootstrap-5.0.0-alpha.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/assets/css/LineIcons.2.0.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/assets/css/main.css') }}">
</head>

<body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('/home/assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
    <script src="{{ asset('/home/assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('/home/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('/home/assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('/home/assets/js/main.js') }}"></script>
</body>

</html>
