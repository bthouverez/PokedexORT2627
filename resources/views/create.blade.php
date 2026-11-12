<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout</title>
</head>
<body style="margin: 0">

    <nav style="background: lightgrey; padding: 10px">
        <a href="/pokemons">Home</a>
        <a href="/pokemons/create">Create</a>
    </nav>

    <h1>Add pokemon</h1>
    <form method="post" action="/pokemons">
        <input type="text" name="name" placeholder="Name"/>
        <br><input type="text" name="height" placeholder="Height"/>
        <br><input type="text" name="weight" placeholder="Weight"/>
        <br><input type="text" name="image" placeholder="Image URL"/>
        <br><input type="text" name="life" placeholder="Life"/>
        <br><input type="radio" name="genre" value="m">Male
        <input type="radio" name="genre" value="f">Female
        <br><input type="date" name="captured_at" placeholder="Capture date"/>
        <br><input type="text" name="level" placeholder="Level"/>
        <br><input type="checkbox" name="is_shiny" placeholder="Shiny"/>Shiny
        <button>Add</button>
    </form>
</body>
</html>
