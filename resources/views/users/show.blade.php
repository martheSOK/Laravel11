<x-guest-layout>
    <form >
        <!-- Nom -->
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom', $user->nom ?? '')" required autofocus autocomplete="nom"  disable/>
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

         <!-- Prenom -->
        <div>
            <x-input-label for="prenom" :value="__('Prenom')" />
            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom', $user->prenom ?? '')" required autofocus autocomplete="prenom" disable />
            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
        </div>
         <!-- Contact -->
        <div>
            <x-input-label for="contact" :value="__('Contact')" />
            <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact', $user->contact ?? '')" required autofocus autocomplete="contact" disable/>
            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
        </div>

         <!-- status -->
         {{-- <div>
            <x-input-label for="status" :value="__('Status')" />
            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status',$user->status ?? '')" required autofocus autocomplete="status" disable/>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div> --}}

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email',$user->email ?? '')" required autocomplete="username" disable/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password',$user->password ?? '')" required autocomplete="new-password" disable/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" :value="old('password_confirmation',$user->password_confirmation ?? '')" required autocomplete="new-password" disable/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
