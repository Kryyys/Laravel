<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des Catégories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <h1 class="text-center text-3xl font-bold underline pb-10">{{__("List of all Categorie")}}</h1>

                    <div id="tableau">

                        <table cellspacing="10" cellpadding="10">

                            <thead>
                                <tr>
                                    <th class="w-20 pl-5">Id</th>
                                    <th class="w-60">Libellé</th>
                                    <th class="w-72">Action</th>
                                    <th>
                                        <x-creer>
                                            Créer
                                        </x-creer>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($categories) > 0)
                                <ul>
                                    @foreach ($categories as $categorie)
                                    <tr>
                                        <td class="pl-5">{{$categorie->id}}</td>
                                        <td>{{$categorie->libelle}}</td>
                                        <td>
                                            <div class="flex flex-row">
                                                <x-modifier :categorie="$categorie">
                                                    Modifier
                                                </x-modifier>
                                                <x-voir :categorie="$categorie">
                                                    Voir
                                                </x-voir>
                                                <button class="supprimer">Supprimer</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </ul>
                                @else
                                Je n'ai pas de catégories.
                                @endif
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
