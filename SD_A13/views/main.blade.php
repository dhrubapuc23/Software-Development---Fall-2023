<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        @yield('content')
    </div>

    <br>
    <h1>This is a master template</h1>

    <div>
        @yield('footer')
    </div>
    
</body>
</html>