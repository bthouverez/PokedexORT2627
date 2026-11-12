@extends('layout-hyperspace')

@section('title', 'All pokemons')

@section('content')
	<table>
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>Taille</th>
			<th>Poids</th>
			<th>Vie</th>
			<th>Genre</th>
			<th>Date capture</th>
			<th>Niveau</th>
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
				<td>{{ $pokemon->genre ? 'Femelle' : 'Male' }}</td>
				<td>{{ $pokemon->captured_at }}</td>
				<td>{{ $pokemon->level }}</td>
				<td>{{ $pokemon->is_shiny ? 'Oui' : 'Non' }}</td>
				<td><img width="150" src="{{ $pokemon->image }}" alt="Image {{ $pokemon->name}}"></td>

			</tr>

		@endforeach
	</table>
@endsection	