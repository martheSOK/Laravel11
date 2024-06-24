<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprise</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1 style="display: flex; justify-content: center;  align-items: center">{{ $titre }}</h1>
        <div>
            <a href="{{ route("evenements.create") }}" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
            <table >
                <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Pays</th>
                            <th>Ville</th>
                            <th>Adresse</th>
                            <th>gps</th>
                            <th>description</th>
                            <th>heur_debut</th>
                            <th>heur_fin</th>
                            <th>Entrepise</th>
                            <th>Modifier</th>
                            <th>Show</th>
                            <th>Supprimer</th>
                        </tr>
                </thead>
                <tbody>
                        @forelse ($liste_evenement as $un_evenement)
                            <tr>
                                <td>{{ $un_evenement->nom}}</td>
                                <td>{{ $un_evenement->pays}}</td>
                                <td>{{ $un_evenement->ville}}</td>
                                <td>{{ $un_evenement->adresse}}</td>
                                <td>{{ $un_evenement->gps}}</td>
                                <td>{{ $un_evenement->description}}</td>
                                <td>{{ $un_evenement->entreprise->nom}}</td>
                                <td>{{ $un_evenement->heur_debut}}</td>
                                <td>{{ $un_evenement->heur_fin}}</td>

                                <td><button><a href="{{ route('evenements.edit' , $un_evenement) }}"><img src="images/pen.png"></a></button></td>
                                <td>
                                    <button id="b3"><a href="{{ route('evenements.show' ,$un_evenement) }}"><img src="images/oeil.png"></a></button>
                                </td>
                                <td>
                                    <form action="{{ route('evenements.delete',$un_evenement) }}" method="post">
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
