<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des Jeux') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-center text-3xl font-bold underline pb-10">{{__("List of all games")}}</h1>

                    <div id="tableau">

                        <table cellspacing="10" cellpadding="10">

                            <thead>
                                <tr>
                                    <th class="w-20 pl-5">Id</th>
                                    <th class="w-60">Titre</th>
                                    <th class="w-72">Action</th>
                                    <th>
                                        <x-creer>
                                            Créer
                                        </x-creer>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($jeux) > 0)
                                <ul>
                                    @foreach ($jeux as $jeu)
                                    <tr>
                                        <td class="pl-5">{{$jeu->id}}</td>
                                        <td>{{$jeu->titre}}</td>
                                        <td>
                                            <div class="flex flex-row">
                                                <x-modifier :jeu="$jeu">
                                                    Modifier
                                                </x-modifier>
                                                <x-voir :jeu="$jeu">
                                                    Voir
                                                </x-voir>
                                                <button class="supprimer">Supprimer</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- <li><a href="{{route('jeux.show', $jeu->id)}}">{{$jeu->titre}}</a></li> -->
                                    @endforeach
                                </ul>
                                @else
                                Je n'ai pas de jeux.
                                @endif
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!--
    @extends('layouts.template')

    @section('titre', 'Tous les jeux')

    @section('contenu')
        <h1>{{__("List of all games")}}</h1>
        @if (count($jeux) > 0)
        <ul>
            @foreach ($jeux as $jeu)
            <li><a href="{{route('jeux.show', $jeu->id)}}">{{$jeu->titre}}</a></li>
            @endforeach
        </ul>
        @else
        Je n'ai pas de jeux.
        @endif
    @endsection
</body>

</html> -->
