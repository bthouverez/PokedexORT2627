@extends('layout-hyperspace')


@section('title', $pokemon->name)

@section('content')

    <h1>{{ $pokemon->name }}</h1>
    <ul id="show">
        <img src="{{ $pokemon->image }}">
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
@endsection