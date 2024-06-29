<x-app-layout>
    <div class="container mx-auto mt-8">
        <h1 class="text-center bg-gray-400 text-blakc font-bold text-4xl p-4 rounded shadow-md underline">
            {{ $titre }}
        </h1>
        <div class="flex justify-end mt-8">
            <a href="{{ route('entreprises.create') }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                <img src="images/plus.png" class="h-6 w-6"> Ajouter
            </a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pays
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quartier
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ville
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Adresse
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Propriétaire
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Edit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Delete
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Show
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($liste_entreprise as $une_entreprise)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $une_entreprise->nom }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $une_entreprise->pays }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $une_entreprise->ville }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $une_entreprise->quartier }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $une_entreprise->adresse }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $une_entreprise->user->nom }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('entreprises.edit', $une_entreprise) }}" class="font-medium hover:underline">
                                    <img src="images/pen.png" class="h-6 w-6">
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('entreprises.show', $une_entreprise) }}" class="font-medium hover:underline">
                                    <img src="images/oeil.png" class="h-6 w-6">
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('entreprises.delete', $une_entreprise) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit">
                                        <img src="images/trash.png" class="h-6 w-6">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="px-6 py-4 text-center text-gray-500">
                                Aucune entreprise disponible
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
