<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WyMoneny</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1><a href="/">WyMoney</a></h1>
        <span>Let's see where your money is</span>
    </header>
    
<ul>
    <li><a href="/balance">Balance</a></li>
    <li><a href="/categories">Categories</a></li>
</ul>

@yield('content')


</body>
</html>