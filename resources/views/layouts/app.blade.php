<!DOCTYPE html>
<html lang="en">

<head>
    <title>InvoiceApp - Dashboard </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="InvoiceApp -  Dashboard">
    <link rel="shortcut icon" href="{{ asset('assetsfavicon.ico') }}">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="v 1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

</head>

<body class="app">

    @include('layouts.__header')


    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">

            @yield('content')

        </div>
        
        @include('layouts.__footer')
    </div>


    @include('layouts.parts.__scripts')
</body>

</html>
