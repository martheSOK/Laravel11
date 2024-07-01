
<x-app-layout>

    <div class="container mx-auto mt-8 max-w-md">
        <h2 class="text-center text-2xl font-bold mb-6">Création d'un user</h2>

        <form action="{{ route('users.store') }}" method="POST" class="bg-form shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-5">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom:</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('nom') border-red-500 @enderror">
                @error('nom')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom:</label>
                <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('prenom') border-red-500 @enderror">
                @error('prenom')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact:</label>
                <input type="text" id="contact" name="contact" value="{{ old('contact') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('contact') border-red-500 @enderror">
                @error('contact')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
                @error('email')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password:</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-red-500 text-sm">Champ requis</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="roles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role(s):</label>
                <select name="roles" multiple id="roles" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 @error('roles') border-red-500 @enderror">
                    <option value="">Sélectionner</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
                @error('roles')
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


