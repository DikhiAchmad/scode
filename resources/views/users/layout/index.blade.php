<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/bundle.css') }}">
</head>

<body>
    @include('users.layout.component.navbar')

    @yield('content')

    @include('users.layout.component.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
