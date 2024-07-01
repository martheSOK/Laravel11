<x-app-layout>
    <div class="container mx-auto mt-8 max-w-md">
        <h2 class="text-center text-2xl font-bold mb-6">Modification d'une entreprise</h2>
    <form action="{{ route('entreprises.update' , $entreprise->id) }}" method="Post" class="bg-form shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')

            <div class="mb-5">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom:</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom', $entreprise->nom ?? '') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('nom') border-red-500 @enderror">
                @error('nom')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="pays" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pays:</label>
                <input type="text" id="pays" name="pays" value="{{ old('pays', $entreprise->pays ?? '') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('pays') border-red-500 @enderror">
                @error('pays')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville:</label>
                <input type="text" id="ville" name="ville"  value="{{ old('ville', $entreprise->ville ?? '') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('ville') border-red-500 @enderror">
                @error('ville')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="quartier" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quartier:</label>
                <input type="text" id="quartier" name="quartier"  value="{{ old('quartier', $entreprise->quartier ?? '') }}"class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('quartier') border-red-500 @enderror">
                @error('quartier')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse:</label>
                <input type="text" id="adresse" name="adresse" value="{{ old('adresse', $entreprise->adresse ?? '') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('adresse') border-red-500 @enderror">
                @error('adresse')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Propriétaire:</label>
                <select name="user_id" id="user_id" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('user_id') border-red-500 @enderror">
                    <option value="">Sélectionner</option>
                    @foreach ($users as $un_user)
                        <option value="{{ $un_user->id }}"
                        @if($entreprise->user_id==$un_user->id)
                            selected
                        @endif>
                        {{ $un_user->nom }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
            </div>
        </form>
    </div>
</x-app-layout>

<style>
    .bg-form {
        background-image: url('/images/font.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>



