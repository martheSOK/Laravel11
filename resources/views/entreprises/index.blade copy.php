<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprise</title>
    <link rel="stylesheet" href="css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <h1 class="bg-red" style="display: flex; justify-content: center;  align-items: center">{{ $titre }}</h1>
        <div>
            <a href="{{ route("entreprises.create") }}" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
            <p>tout va toujours bien</p>
            <table >
                <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Pays</th>
                            <th>Quartier</th>
                            <th>Ville</th>
                            <th>Adresse</th>
                            <th>Proprietaire</th>
                            <th>Modifier</th>
                            <th>Show</th>
                            <th>Supprimer</th>
                        </tr>
                </thead>
                <tbody>
                        @forelse ($liste_entreprise as $une_entreprise)
                            <tr>
                                <td>{{ $une_entreprise->nom}}</td>
                                <td>{{ $une_entreprise->pays}}</td>
                                <td>{{ $une_entreprise->ville}}</td>
                                <td>{{ $une_entreprise->quartier}}</td>
                                <td>{{ $une_entreprise->adresse}}</td>
                                <td>{{ $une_entreprise->user->nom}}</td>

                                <td><button><a href="{{ route('entreprises.edit' , $une_entreprise) }}"><img src="images/pen.png"></a></button></td>
                                <td>
                                    <button id="b3"><a href="{{ route('entreprises.show' ,$une_entreprise) }}"><img src="images/oeil.png"></a></button>
                                </td>
                                <td>
                                    <form action="{{ route('entreprises.delete',$une_entreprise) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button><img src="images/trash.png"></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <p>Aucune entreprise disponible</p>
                        @endforelse

                </tbody>

            </table>

        </div>
    </div>

</body>

</html>
