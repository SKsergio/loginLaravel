<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('../resources/css/normalice.css')}}">
    <link rel="stylesheet" href="{{asset('../resources/css/layaout.css')}}">
    @vite('resources/css/app.css')
    @stack('css')
</head>
<body >
    <header>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>
</body>
</html>