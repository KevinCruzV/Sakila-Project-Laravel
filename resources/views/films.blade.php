<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Longueur</th>
            <th>Voir les détails</th>
        </tr>
        @foreach($films as $film)
        <tr>
            <td> {{$film->title}} </td>
            <td> {{$film->description}} </td>
            <td>{{ 
            // Si le film fait plus de 60min : affiche le nombre d'heures + "h"
            // Sinon, n'affiche rien
            (floor($film->length / 60) > 0
                ? floor($film->length/ 60) . "h" 
                : "")
            . " " .
            // Si la longueur du film n'est pas un multiple de 60 (donc qu'il y a des minutes)
            // Afficher les minutes + "min"
            // Sinon, n'affiche rien
            ($film->length % 60 > 0
                ?  $film->length % 60 . "min"
                : "") }}</td>
            <td><a href="../resources/views/voir-film.blade.php?id= {{$film->film_id}} ">Voir les détails</a></td>
        </tr>
        @endforeach
    </table>
    {{ $films->links() }}
</body>
</html>