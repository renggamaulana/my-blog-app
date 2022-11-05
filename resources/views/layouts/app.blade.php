<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <div class="nav">
        @include('layouts.navbar')
    </div>
    
    <div>
        @yield('content')
    </div>
    
    <div>
        @include('layouts.footer')
    </div>
</body>
</html>