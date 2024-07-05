
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-buttons">
            <button>Home</button>
            <button>Events</button>
            <button>Contact</button>
        </div>
    </nav>
    <div class="background">
        <div class="image-slide"></div>
    </div>

</body>
</html> --}}



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="stylesheet" href="/build/tailwind.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Bienvenu(e)</title>
</head>
{{-- bars dimitrios --}}
<body class="antialiased bg-gray-500 bars">
  <aside class="header">
        <div class="fixed top-0 z-50 w-full text-white dark-mode:text-gray-200 dark-mode:bg-gray-800 ">
          <div x-data="{ open: false }" class="flex flex-col px-4 mx-auto bg-gray-800 max-w-screen-3xl md:items-center md:justify-between md:flex-row md:px-6 lg:items-center lg:justify-between lg:flex-row lg:px-6 xl:items-center xl:justify-between xl:flex-row xl:px-6 sm:items-center sm:justify-between sm:flex-row sm:px-6">
              <div class="flex flex-row items-center justify-between p-6">
                  <a href="#" class="text-lg italic font-semibold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">EventCulture</a>
                  <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                      <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                  </button>
              </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    @if (Route::has('login'))
                        <div class="flex justify-end space-x-6">
                            @auth
                                <a href="{{ url('/dashboard') }}" >Tableau de Bord</a>
                            @else
                                <a class="px-4 py-2 mx-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white bt dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('login') }}">Connexion</a>

                                @if (Route::has('register'))
                                    <a class="px-4 py-2 mt-2 text-sm font-semibold text-white rounded-lg bg-transparent-200 dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white bt dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('register') }}">Inscription</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </nav>
           </div>

            {{-- --------------------------- --}}
            <div class="px-8 mt-4">
                @yield('marthe')
            </div>
            {{-- --------------------------- --}}
    </div>

  </aside>
</body>
</html>
