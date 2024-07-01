<x-app-layout>
    <div class="container mx-auto mt-8 max-w-md">
        <h2 class="text-center text-2xl font-bold mb-6">Création d'un évenement</h2>

        <form action="{{ route('evenements.store') }}" method="POST" class="bg-form shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-5">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom:</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('nom') border-red-500 @enderror">
                @error('nom')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="pays" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pays:</label>
                <input type="text" id="pays" name="pays" value="{{ old('pays') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('pays') border-red-500 @enderror">
                @error('pays')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville:</label>
                <input type="text" id="ville" name="ville" value="{{ old('ville') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('ville') border-red-500 @enderror">
                @error('ville')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse:</label>
                <input type="text" id="adresse" name="adresse" value="{{ old('adresse') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('adresse') border-red-500 @enderror">
                @error('adresse')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>


            <div class="mb-5">
                <label for="gps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Localisation:</label>
                <input type="number" id="gps" name="gps" value="{{ old('gps') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('gps') border-red-500 @enderror">
                @error('gps')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description:</label>
                <input type="text" id="description" name="description" value="{{ old('description') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror">
                @error('description')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="date_event" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date:</label>
                <input type="date" id="date_event" name="date_event" value="{{ old('date_event') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('date_event') border-red-500 @enderror">
                @error('date_event')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="heur_debut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Debut de l'evenement:</label>
                <input type="time" id="heur_debut" name="heur_debut" value="{{ old('heur_debut') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('heur_debut') border-red-500 @enderror">
                @error('heur_debut')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="heur_fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fin de l'evenement:</label>
                <input type="time" id="heur_fin" name="heur_fin" value="{{ old('heur_fin') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('heur_fin') border-red-500 @enderror">
                @error('heur_fin')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="entreprise_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Entreprise:</label>
                <select name="entreprise_id" id="entreprise_id" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('user_id') border-red-500 @enderror">
                    <option value="">selectionner</option>
                    @foreach ($entreprises as $une_entreprise )
                        <option value="{{ $une_entreprise->id }}">{{ $une_entreprise->nom }}</option>
                    @endforeach
                </select>
                @error('entreprise_id')
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


