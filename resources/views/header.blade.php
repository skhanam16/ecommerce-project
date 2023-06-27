<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <ul class="topnav">
            <li><a class="active" href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/about')}}">About us</a></li>
            <li><a href="{{ url('/contact')}}">Contact us</a></li>
            <li><a href="{{ url('/signup')}}">Signup</a></li>
            </ul>
        </div>
    </header>
    
</body>
</html>