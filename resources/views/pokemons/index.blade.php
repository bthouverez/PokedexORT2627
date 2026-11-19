@extends('layouts.layout-hyperspace')

@section('title', 'All pokemons')

@section('content')
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Height</th>
			<th>Weight</th>
			<th>Life</th>
			<th>Genre</th>
			<th>Capture date</th>
			<th>Level</th>
			<th>Shiny</th>
			<th>Image</th>
		</tr>
		@foreach($pokemons as $pokemon)

			<tr>
				<td>{{ $pokemon->id }}</td>
				<td>
					<a href="/pokemons/{{ $pokemon->id }}">
						{{ $pokemon->name }}
					</a>
				</td>
				<td>{{ $pokemon->height }}</td>
				<td>{{ $pokemon->weight }}</td>
				<td>{{ $pokemon->life }}</td>
				<td>{{ $pokemon->genre ? 'Female' : 'Male' }}</td>
				<td>{{ $pokemon->captured_at }}</td>
				<td>{{ $pokemon->level }}</td>
				<td>{{ $pokemon->is_shiny ? 'Yes' : 'No' }}</td>
				<td><img width="150" src="{{ $pokemon->image }}" alt="Image {{ $pokemon->name}}"></td>

			</tr>

		@endforeach
	</table>
@endsection	