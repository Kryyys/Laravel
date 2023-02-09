<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détail de la Catégorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <h2 class="m-10 text-2xl font-bold underline">{{__("Categorie details")}} {{$categorie->libelle}}</h2>

                    <div class="
flex
justify-center
shadow-sm
rounded-lg
bg-sky-500
hover:bg-cyan-600/50
">
                        <div class="p-5
text-white
text-center
md:text-center
text-xl
font-bold">
                            Libellé : {{$categorie->libelle}}
                        </div>
                    </div>

                    <p class="m-20">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora ex consequuntur optio fugiat ad aspernatur esse alias et. Ex sapiente mollitia nesciunt, rem debitis aspernatur ipsum labore ab illo aliquid? Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias saepe illo sapiente, quos, totam enim repudiandae ad perspiciatis iusto exercitationem veniam. Ipsam recusandae molestias, ullam repellat laboriosam aspernatur quo esse. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid dignissimos modi libero nemo, sapiente ratione saepe distinctio accusamus. Nam voluptates ex dicta iure illo amet iste doloremque sunt corrupti qui!</p>

                    <div class="boutons">

                        <div class="mr-4">
                            <x-modifier :categorie="$categorie">
                                Modifier
                            </x-modifier>
                        </div>

                        <div>
                            <button class="supprimer">Supprimer</button>
                        </div>

                        <div> <x-back :categorie="$categorie">
                                Retour
                            </x-back></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
