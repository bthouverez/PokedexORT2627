<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pokemon;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bonjour/{prenom}/{humeur?}', function (string $prenom, ?string $humeur = 'peureux') {

    return view('accueil', compact('prenom', 'humeur'));
});


Route::get('/pokemons', function() {

    $pokemons = Pokemon::all();

    return view('pokemons.index', compact('pokemons'));
});




Route::get('/pokemons/create', function() {
    return view('pokemons.create');
});

Route::get('/pokemons/{pokemon}', function (Pokemon $pokemon) {
    return view('pokemons.show', compact('pokemon'));
});




Route::get('/test', function() {
    return view('layouts.layout-hyperspace');
});


Route::post('/pokemons', function() {
    // valide les données
    request()->validate([
        'name' => ['required', 'max:12', 'min:3'],
        'height' => ['required', 'decimal:2'],
        'weight' => ['required', 'decimal:2'],
        'image' => [],
        'is_shiny' => [],
        'captured_at' => ['required', 'date'],
        'level' => ['required', 'integer', 'min:1', 'max:100'],
        'life' => ['required', 'integer'],
        'genre' => ['required', 'boolean'],
    ]);


    // persister les données
    $pok = new Pokemon;
    $pok->name = request('name');
    $pok->height = request('height');
    $pok->weight = request('weight');
    $pok->image = request('image');
    $pok->life = request('life');
    $pok->genre = request('genre');
    $pok->captured_at = request('captured_at');
    $pok->level = request('level');
    $pok->is_shiny = request('is_shiny') == "on" ? 1 : 0;
    $pok->save();
    return redirect('/pokemons/'.$pok->id);
});