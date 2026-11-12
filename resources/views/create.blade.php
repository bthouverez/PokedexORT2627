@extends('layout-hyperspace')

@section('title', 'Create pokemon')

@section('content')
    <h1>Add pokemon</h1>
    <form method="post" action="/pokemons">
        <input type="text" name="name" placeholder="Name"/>
        <br><input type="text" name="height" placeholder="Height"/>
        <br><input type="text" name="weight" placeholder="Weight"/>
        <br><input type="text" name="image" placeholder="Image URL"/>
        <br><input type="text" name="life" placeholder="Life"/>
        <br>
        <div class="col-4 col-12-small">
            <input type="radio" id="demo-priority-low" name="genre" value="f">
            <label for="demo-priority-low">Female</label>
        </div>
        <div class="col-4 col-12-small">
            <input type="radio" id="demo-priority-normal" name="genre" value="m">
            <label for="demo-priority-normal">Male</label>
        </div>
        <br><input type="text" name="captured_at" placeholder="Capture date"/>
        <br><input type="text" name="level" placeholder="Level"/>
        <br><div class="col-6 col-12-small">
            <input type="checkbox" id="demo-copy" name="is_shiny">
            <label for="demo-copy">Shiny</label>
        </div>
        <button>Add</button>
    </form>
@endsection