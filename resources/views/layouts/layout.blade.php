
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Pokédex')</title>
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">
 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-poke-yellow bg-dots font-body text-ink antialiased">
 
    {{-- Barre de navigation --}}
    <header class="sticky top-0 z-50 border-b-4 border-ink bg-poke-red shadow-[0_6px_0_0_#1A1A2E]">
        <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3">
 
            <a href="/pokemons" class="group flex items-center gap-3">
                {{-- Pokéball --}}
                <span class="relative block h-10 w-10 overflow-hidden rounded-full border-4 border-ink bg-white transition-transform duration-300 group-hover:rotate-[360deg]">
                    <span class="absolute inset-x-0 top-0 h-1/2 bg-poke-red"></span>
                    <span class="absolute inset-x-0 top-1/2 h-1 -translate-y-1/2 bg-ink"></span>
                    <span class="absolute left-1/2 top-1/2 h-3 w-3 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-ink bg-white"></span>
                </span>
                <span class="font-display text-3xl tracking-wider text-white [text-shadow:2px_2px_0_#1A1A2E]">
                    Pokédex
                </span>
            </a>
 
            <ul class="flex items-center gap-3">
                <li>
                    <a href="/pokemons"
                       class="nav-link {{ request()->is('pokemons') ? 'nav-link-active' : '' }}">
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="/pokemons/create"
                       class="nav-link {{ request()->is('pokemons/create') ? 'nav-link-active' : '' }}">
                        + Créer
                    </a>
                </li>
            </ul>
        </nav>
    </header>
 
    {{-- Contenu --}}
    <main class="mx-auto max-w-6xl px-4 py-10">
        @if (session('success'))
            <div class="mb-6 rounded-2xl border-4 border-ink bg-poke-green px-5 py-3 font-semibold shadow-cartoon">
                {{ session('success') }}
            </div>
        @endif
 
        @yield('content')
    </main>
 
    <footer class="border-t-4 border-ink bg-poke-blue py-4 text-center font-semibold text-white">
        Gotta catch 'em all !
    </footer>
 
</body>
</html>
 