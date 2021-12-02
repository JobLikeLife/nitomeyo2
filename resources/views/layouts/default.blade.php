<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'nitomeyo App')- Laravel 新手入门教程</title>
    <link rel="stylesheet"  href="{{ asset('css/app.css') }}">
    
</head>
<body class="">
    @include('layouts._header')
 <div class="">
    <div class="">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
 </div>
</body>
</html>