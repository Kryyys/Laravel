<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h2 class="m-10 text-2xl font-bold underline">{{__("Edit the game")}}</h2>

                    <label for="titre"> Nouveau titre :
                        <br>
                        <input type="text">
                    </label>

                    <br>

                    <input type="submit" value="Modifier" name="modifier" class="modifier m-10">




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
