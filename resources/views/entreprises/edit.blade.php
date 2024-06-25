
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

        <h2 style="display: flex; justify-content: center;  align-items: center; ">Modification d'une entreprise</h2>

        <form action="{{ route("entreprises.update" , $entreprise->id) }}" method="Post" class="register-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom', $entreprise->pays ?? '') }}" class="@error('nom') faild_input @enderror">
            </div>

            @error('nom')
                <span style="color:red;">Champ requis</span>
            @enderror

            <div class="form-group">
                <label for="pays">Pays:</label>
                <input type="text" id="pays" name="pays" value="{{ old('pays', $entreprise->pays ?? '') }}" class="@error('pays') faild_input @enderror">
            </div>

            @error('pays')
                <span style="color:red;">Champ requis</span>
            @enderror

            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville" value="{{ old('ville', $entreprise->ville ?? '') }}" class="@error('ville') faild_input @enderror">
            </div>
            @error('ville')
                <span style="color:red;">Champ requis</span>
            @enderror
            <div class="form-group">
                <label for="quartier">Quartier:</label>
                <input type="text" id="quartier" name="quartier" value="{{ old('quartier', $entreprise->quartier ?? '') }}" class="@error('quartier') faild_input @enderror">
            </div>
            @error('quartier')
                <span style="color:red;">Champ requis</span>
            @enderror

            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse"  value="{{ old('adresse', $entreprise->adresse ?? '') }}" class="@error('adresse') faild_input @enderror">
            </div>
            @error('adresse')
                <span style="color:red;">Champ requis</span>
            @enderror


            <div>
                <label for="user_id">Propriétaire:</label>
                <select name="user_id" id="">
                    <option value="">selectionner</option>
                    @foreach ($users as $un_user )
                        <option value="{{ $un_user->id }}"
                            @if($entreprise->user_id==$un_user->id)
                                selected
                            @endif>
                            {{ $un_user->nom }}
                        </option>
                    @endforeach

                </select>
            </div><br>


            <button type="submit" class="btn-success">Enregistrer</button>
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
