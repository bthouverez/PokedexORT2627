@extends('layouts.layout')


@section('title', $trainer->name)

@section('content')

    <h1>{{ $trainer->name }}</h1>
    <ul id="show">
        <img src="{{ $trainer->image }}">
        <li>id : {{ $trainer->id }}</li>
        <li>genre : {{ $trainer->genre ? 'female' : 'male' }}</li>
        <li>level : {{ $trainer->level }}</li>
    </ul>

    <a href="/trainers/{{ $trainer->id-1}}">Previous</a>
    <a href="/trainers/{{ $trainer->id+1}}">Next</a>
@endsection