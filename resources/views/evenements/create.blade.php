
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="/css/create.css">
</head>
<body>
    <style>
        .faild_input{
            border: solid 1px red;
        }
    </style>
    <header>
        <nav>
            <div class="container1">
                <div class="logo">Logo</div>
                <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">User profile</a></li>
                </ul>
            </div>
        </nav>
    <header>
    <main>
    <div class="container2">

        <h2 style="display: flex; justify-content: center;  align-items: center; ">Creation d'un évenement</h2>

        <form action="{{ route("evenements.store") }}" method="POST" class="register-form">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}"  class="@error('nom') faild_input @enderror" >
            </div>

            @error('nom')
                <span style="color:red;">Champ requis</span>
            @enderror

            <div class="form-group">
                <label for="pays">Pays:</label>
                <input type="text" id="pays" name="pays"  value="{{ old('pays') }}"  class="@error('pays') faild_input @enderror">
            </div>
            @error('pays')
                <span style="color: red;">champ requis</span>
            @enderror

            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville" value="{{ old('ville') }}"  class="@error('ville') faild_input @enderror" >
            </div>

            @error('ville')
            <span style="color: red;">champ requis</span>
            @enderror

            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse"  value="{{ old('adresse') }}"  class="@error('adresse') faild_input @enderror">
            </div>
            @error('adresse')
                <span style="color: red;">champ requis</span>
            @enderror

            <div class="form-group">
                <label for="gps">Localisation:</label>
                <input type="number" id="gps" name="gps" step="0.000001" min="-90" max="90"   value="{{ old('gps') }}"  class="@error('gps') faild_input @enderror">
            </div>
            @error('gps')
                <span style="color: red;">champ requis</span>
            @enderror

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description"   value="{{ old('description') }}"  class="@error('description') faild_input @enderror">
            </div>
            @error('description')
                <span style="color: red;">champ requis</span>
            @enderror

            <div class="form-group">
                <label for="date_event">Date:</label>
                <input type="date" id="date_event" name="date_event" value="{{ old('date_event') }}"  class="@error('date_event') faild_input @enderror" >
            </div>
            @error('date_event')
                <span style="color: red;">champ requis</span>
            @enderror

            <div class="form-group">
                <label for="heur_debut">Debut de l'evenement:</label>
                <input type="time" id="heur_debut" name="heur_debut"  value="{{ old('heur_debut') }}"  class="@error('heur_debut') faild_input @enderror">
            </div>
            @error('heur_debut')
                <span style="color: red;">champ requis</span>
            @enderror

            <div class="form-group">
                <label for="heur_fin">Fin de l'evenement:</label>
                <input type="time" id="heur_fin" name="heur_fin"  value="{{ old('heur_fin') }}"  class="@error('heur_fin') faild_input @enderror" >
            </div>
            @error('heur_fin')
             <span style="color: red;">champ requis</span>
            @enderror



            <div>
                <label for="entreprise_id">Entreprise:</label>
                <select name="entreprise_id" id="">
                    <option value="">selectionner</option>
                    @foreach ($entreprises as $une_entreprise )
                        <option value="{{ $une_entreprise->id }}">{{ $une_entreprise->nom }}</option>
                    @endforeach

                </select>
            </div><br>

            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </div>
    </main>
     <!--<footer>
        <p>&copy; 2024 Mon application Web. Tous droits réservés.</p>
        <nav>
            <ul>
                <li><a href="#">Plan du site</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">Conditions d'utilisation</a></li>
            </ul>
        </nav>
    </footer>-->
</body>
</html>
