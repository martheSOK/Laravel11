@extends('welcome')
@section('marthe')
    <div class="flex justify-end mb-4">
        <a class="p-2 text-white bg-green-800 rounded-lg cursor-pointer hover:bg-green-600 " href="{{ route('home.index') }}"> liste des evenements</a>
    </div>
    <section class="overflow-hidden text-gray-950 body-font">
        <div class="container px-5 mx-auto rounded-lg">
          <div class="flex flex-wrap mx-auto rounded-lg lg:w-4/5 bg-slate-800">
            {{-- <img alt="voiture" class="object-cover object-center w-full h-64 p-4 rounded lg:w-1/2 lg:h-auto" src="{{ asset('storage/' . $trajet->voiture->voiture_image) }}"> --}}

            <div class="w-full mt-6 lg:w-1/2 lg:pl-10 lg:py-6 lg:mt-0">
              <div class="flex items-center gap-6">

                <h1 class="mb-1 text-3xl font-medium text-gray-100 title-font">Pays : {{ $evenement->pays}}</h1>
                <h1 class="mb-1 text-3xl font-medium text-gray-100 title-font">Ville : {{ $evenement->ville}}</h1>
                <h1 class="mb-1 text-3xl font-medium text-gray-100 title-font">Adresse : {{ $evenement->adresse}}</h1>
              </div>
              <div class="flex mb-4">
                <span class="flex items-center">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  {{-- <span class="ml-3 text-gray-600">4 Reviews</span> --}}
                </span>

              </div>
              <p class="leading-relaxed text-gray-100">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
              <div class="flex items-center pb-5 mt-6 mb-5 border-b-2 border-gray-100">
                <div class="flex">
                    <span  class="mr-3 text-gray-100">Dt : {{ $evenement->date_event}}</span>
                    <span class="mr-3 text-gray-100">Hd : {{ $evenement->heur_debut}}</span>
                    <span class="mr-3 text-gray-100">Hf : {{ $evenement->heur_fin}}</span>
                </div>
                <div class="flex items-center ml-6">
                  <span class="mr-3 text-gray-100">Desc : {{ $evenement->dateDepart}}</span>
                  <span class="mr-3 text-gray-100">Loca : {{ $evenement->gps}}</span>
                </div>
              </div>
               {{-- payement --}}
              {{--  <div class="flex items-center gap-3">
                <span class="text-2xl font-medium text-gray-100 title-font">{{ $evenement->tarif}}F</span>



               <div class="flex items-center gap-2">
                  <div>
                    <a href="{{ route('tefo', [$evenement->tarif, $evenement->id]) }}">Tmoney</a>
                  </div>
                </div> --}}



                <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-red-500 ml-4 hover:scale-[1.3]">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-6" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                  </svg>
                </button>

                <button class="inline-flex items-center justify-center w-10 h-10 p-0 ml-4 text-gray-500 bg-green-200 border-0 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                      </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection

