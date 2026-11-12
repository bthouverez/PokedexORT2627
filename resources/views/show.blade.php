<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un pokemon</title>
</head>
<body>
    <nav style="background: lightgrey; padding: 10px">
        <a href="/pokemons">Home</a>
        <a href="/pokemons/create">Create</a>
    </nav>

    <h1>{{ $pokemon->name }}</h1>
    <ul>
        <img width="200" style="float: right" src="{{ $pokemon->image }}">
        <li>id : {{ $pokemon->id }}</li>
        <li>height : {{ $pokemon->height }}</li>
        <li>weight : {{ $pokemon->weight }}</li>
        <li>life : {{ $pokemon->life }}</li>
        <li>genre : {{ $pokemon->genre ? 'female' : 'male' }}</li>
        <li>captured_at : {{ $pokemon->captured_at }}</li>
        <li>level : {{ $pokemon->level }}</li>
        {!! $pokemon->is_shiny ? "<li>Shiny</li>" : "" !!}
    </ul>

    <a href="/pokemons/{{ $pokemon->id-1}}">Previous</a>
    <a href="/pokemons/{{ $pokemon->id+1}}">Next</a>
</body>
</html>