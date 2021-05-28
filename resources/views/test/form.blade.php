<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Test de formulaire</title>
    </head>
    <body>
        <form method="POST">
            @csrf
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required />
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required />
            <label for="age">Age</label>
            <input type="number" name="age" id="age" required />

            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>