@extends('layouts.layout')

@section('title', 'All trainers')

@section('content')

@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Level</th>
        </tr>
        @foreach($trainers as $trainer)

            <tr>
                <td>{{ $trainer->id }}</td>
                <td>
                    <a href="/trainers/{{ $trainer->id }}">
                        {{ $trainer->name }}
                    </a>
                </td>
                <td>{{ $trainer->genre ? 'Female' : 'Male' }}</td>
                <td>{{ $trainer->level }}</td>
                <td><img width="150" src="{{ $trainer->image }}" alt="Image {{ $trainer->name}}"></td>

            </tr>

        @endforeach
    </table>
@endsection 
@endsection