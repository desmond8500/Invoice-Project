<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' ?? 'PDF')</title>
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }} ">
</head>
<body>
    <a href="http://"> Hello</a>

    @yield('content')

</body>
</html>
