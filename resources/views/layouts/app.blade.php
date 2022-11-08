<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | @yield('title')</title>
    {{-- Bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    nav {
        display: flex;
        background: rgb(59, 59, 59);
        justify-content: space-between;
        height: 8vh;
    }

    .brand a{
        color: aliceblue;
        font-size: 32px;
        text-decoration: none;
        padding: 15px;
    }

    nav ul {
        display: flex;  
        padding: 20px; 
    }

    ul li {
        list-style: none !important;
    }
    ul li a {
        color: antiquewhite;
        margin-right: 10px;
        text-decoration: none;
    }
    .container {
        max-width: 960px;
        margin: 10px auto;
        background: rgb(222, 222, 222);
        height: 100vh;
    }

    .content {
        padding: 15px;
    }
    .title, .content-text {
       font-family: 'Courier New', Courier, monospace; 
    }
    .content-text{
        margin-top: 30px;
    }

    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: rgb(75, 75, 75);
        color: white;
        text-align: center;
    }
</style>
<body>

    <div class="nav">
        @include('layouts.navbar')
    </div>
    
    <div class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </div>
    
    <div>
        @include('layouts.footer')
    </div>
</body>
</html>