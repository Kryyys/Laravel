<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>-->
    <!-- Liaison Tailwind -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-sky-300">

    <nav>

        <div class="flex flex-row justify-center space-x-6 text-xl bg-sky-900 p-3 text-white font-bold">
            <a href="{{route ('jeux.index')}}" class="hover:underline">Index</a>
            <a href="{{route ('jeux.show', 1)}}" class="hover:underline">Jeu n°1</a>
        </div>

    </nav>

    <div class="container">
        @yield('contenu')
    </div>
</body>

</html> -->
