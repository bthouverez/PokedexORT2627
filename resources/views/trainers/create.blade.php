@extends('layouts.layout')

@section('title', 'Create trainer')

@section('content')

<form method="post" action="/trainers">
    <input type="text" name="name" placeholder="Name">
    <select type="select" name="genre">
        <option>Select option ...</option>
        <option value="0">Male</option>
        <option value="1">Female</option>
    </select>
    <input type="number" name="level" placeholder="Level">
    <input type="text" name="image" placeholder="Image URL">
    <button>Create</button>
</form>
@endsection