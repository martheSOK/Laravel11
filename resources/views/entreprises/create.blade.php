
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="/css/create.css">
</head>
<body>
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

        <h2 style="display: flex; justify-content: center;  align-items: center; ">Creation d'une entreprise</h2>

        <form action="{{ route("entreprises.store") }}" method="POST" class="register-form">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            @error('nom')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="pays">Pays:</label>
                <input type="text" id="pays" name="pays" required>
            </div>
            @error('pays')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville" required>
            </div>

            @error('ville')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="quartier">Quartier:</label>
                <input type="text" id="quartier" name="quartier" required>
            </div>
            @error('quartier')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" required>
            </div>
            @error('adresse')
                <div class="error">{{ $message }}</div>
            @enderror

            <div>
                <label for="user_id">Propriétaire:</label>
                <select name="user_id" id="">
                    <option value="">selectionner</option>
                    @foreach ($users as $un_user )
                        <option value="{{ $un_user->id }}">{{ $un_user->nom }}</option>
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
