<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>Modulo admin</title>
</head>
<body>
    
    @include('dashboard.partials.nav-header-main')

    <div class="container">
        @include('dashboard.partials.session-flash-status')
        @yield('content')
    </div>

</body>
<script src="{{ asset("js/app.js") }}"></script>

</html>