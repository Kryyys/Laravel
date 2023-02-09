<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des Tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-center text-3xl font-bold underline pb-10">{{__("List of all Tags")}}</h1>

                    <div id="tableau">

                        <table cellspacing="10" cellpadding="10">

                            <thead>
                                <tr>
                                    <th class="w-20 pl-5">Id</th>
                                    <th class="w-60">Nom</th>
                                    <th class="w-72">Action</th>
                                    <th>
                                    <div class="creer w-16">
                                            <a href="{{route('tags.create')}}">Créer</a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($tags) > 0)
                                <ul>
                                    @foreach ($tags as $tag)
                                    <tr>
                                        <td class="pl-5">{{$tag->id}}</td>
                                        <td>{{$tag->nom}}</td>
                                        <td>
                                            <div class="flex flex-row">
                                                <x-modifier :tag="$tag">
                                                    Modifier
                                                </x-modifier>
                                                <x-voir :tag="$tag">
                                                    Voir
                                                </x-voir>
                                                <button class="supprimer">Supprimer</button>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach
                                </ul>
                                @else
                                Je n'ai pas de tags.
                                @endif
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
