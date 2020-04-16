<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Omaat-Cpanel</title>

    <!-- Scripts -->
    
    <script src=""></script>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
        <link rel="stylesheet" href="{{asset("css/admin.css")}}">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
</head>
<body>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>
@yield('jquery')
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/all.min.js")}}"></script>

</body>
</html>
