<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <nav>
        <a href="/pokemons">Home</a>
        <a href="/pokemons/create">Create</a>
    </nav>


    @yield('content')

</body>
</html>