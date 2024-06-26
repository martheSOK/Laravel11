@extends('layouts.base')
@section("content")
<div class="container">
    <div class="container">
        <h1 style="display: flex; justify-content: center;  align-items: center; margin-top:60px; font-weight: bold; font-size: 2rem;">{{ $titre }}</h1>
        <div>
            <a href="{{ route("evenements.create") }}" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
            <table >
                <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Pays</th>
                            <th>Ville</th>
                            <th>Adresse</th>
                            <th>Gps</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Heur_debut</th>
                            <th>Heur_fin</th>
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
                                <td>{{ $un_evenement->date_event}}</td>
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
                            <p style=" margin-top:100px;">Aucun evenement disponible</p>
                        @endforelse

                </tbody>

            </table>

        </div>
    </div>

@endsection

