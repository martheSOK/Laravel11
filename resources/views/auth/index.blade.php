<x-app-layout>
<div class="container">
    <h1 class="bg-red" style="display: flex; justify-content: center;  align-items: center; margin-top:60px; font-weight: bold; font-size: 2rem;">{{ $titre }}</h1>
    <div>
        <a href="{{ route('register') }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 " style="margin-top:100px;"> <img src="images/plus.png"> Ajouter</a>
        {{-- <p>tout va toujours bien</p> --}}
        <table >
            <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Modifier</th>
                        <th>Show</th>
                        <th>Supprimer</th>
                    </tr>
            </thead>
            <tbody>
                    @forelse ($liste_users as $un_user)
                        <tr>
                            <td>{{ $un_user->nom}}</td>
                            <td>{{ $un_user->prenom}}</td>
                            <td>{{ $un_user->contact}}</td>
                            <td>{{ $un_user->status}}</td>
                            <td>{{ $un_user->email}}</td>

                            <td><button><a href="{{ route('users.edit' , $un_user) }}"><img src="images/pen.png"></a></button></td>
                            <td>
                                <button id="b3"><a href="{{ route('users.show' ,$un_user) }}"><img src="images/oeil.png"></a></button>
                            </td>
                            <td>
                                <form action="{{ route('users.delete',$un_user) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button><img src="images/trash.png"></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <p>Aucun user enregistrer</p>
                    @endforelse

            </tbody>

        </table>

    </div>
</div>

</x-app-layout>
