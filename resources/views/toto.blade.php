<h1>Bonjour {{ $name }} !</h1>
@if($active)
    <h2>Ca va bien ?</h2>
@else
    <h1>Au revoir !</h1>
@endif

@foreach($actors as $actor)
    <p>{{ $actor['first_name'] }}</p>
@endforeach

@include('welcome')


La vue a le droit à :
- if/elseif/else
- switch éventuellement
- for/foreach
- while/dowhile éventuellement
- echo
- appeler des fonctions

Le contrôleur :
- vérifie les données en entrée s'il y en a
- va chercher les données via le modèle si nécessaire
- va mettre en forme les données récupérées si nécessaire
- transfère les données à la vue

Le modèle :
- va chercher les données
- fait des requêtes pour insérer/mettre à jour/supprimer

La vue :
- affiche les données

Le routeur :
- choisit quel contrôleur appeler en fonction de l'URL