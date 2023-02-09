<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h2 class="m-10 text-2xl font-bold underline">{{__("Create a game")}}</h2>

                    <label for="titre"> Titre du nouveau jeu :
                        <br>
                        <input type="text">
                    </label>

                    <br>

                    <input type="submit" value="Créer" name="creer" class="creer m-10">


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

