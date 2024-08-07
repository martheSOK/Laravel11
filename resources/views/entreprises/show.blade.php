
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
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

       <a href="{{ route("entreprises.index") }}" style="float: right;"> <img src="/images/back.png" style="height: 20px; ">Back</a>

        <h2 style="display: flex; justify-content: center;  align-items: center; padding-top: 30px;">Informations détaillé  d'une entreprise</h2>
    <div class="container2">
        <form  class="register-form">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom"  value="{{ old('nom', $entreprise->nom) }}"  class="@error('nom') faild_input @enderror" disabled>
            </div>
            <div class="form-group">
                <label for="pays">Pays:</label>
                <input type="text" id="pays" name="pays"  value="{{ old('pays', $entreprise->pays) }}"  class="@error('pays') faild_input @enderror" disabled>
            </div>
            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville" value="{{ old('ville', $entreprise->ville) }}"  class="@error('ville') faild_input @enderror"  disabled>
            </div>

            <div class="form-group">
                <label for="quartier">Quartier:</label>
                <input type="text" id="quartier" name="quartier"  value="{{ old('quartier', $entreprise->quartier) }}"  class="@error('quartier') faild_input @enderror" disabled>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" value="{{ old('adresse', $entreprise->adresse) }}"  class="@error('adresse') faild_input @enderror" disabled>
            </div>

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
