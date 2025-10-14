<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 10:35:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Dashboard | {{ config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('admin/css/dashlitee1e3.css?ver=3.2.4') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/css/themee1e3.css?ver=3.2.4') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('admin.sidebar')
            <div class="nk-wrap">
                @include('admin.header')
                <div class="nk-content">
                    @yield('content')
                </div>
                @include('admin.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/js/bundlee1e3.js?ver=3.2.4') }}"></script>
    <script src="{{ asset('admin/js/scriptse1e3.js?ver=3.2.4') }}"></script>
    <script src="{{ asset('admin/js/demo-settingse1e3.js?ver=3.2.4') }}"></script>
    <script src="{{ asset('admin/js/charts/gd-defaulte1e3.js?ver=3.2.4') }}"></script>
</body>

</html>