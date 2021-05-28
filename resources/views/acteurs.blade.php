<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sakila</title>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="acteurs">
                        Tous les acteurs et actrices
                    </a>
                </li>
                <li>
                    <a href="films">
                        Tous les films
                    </a>
                </li>
                <li>
                    <a href="categories">
                        Toutes les catégories
                    </a>
                </li>
            </ul>
        </nav>
        <h1>Tous les acteurs et actrices</h1>
        <table>
            <tr>
                <th>Nom complet</th>
                <td>Détails</td>
            </tr>
            @foreach($actors as $actor)
            <tr>
                <td>{{ $actor->first_name . " " . $actor->last_name }}</td>
                <td>
                    <a href="voir-acteur?id={{ $actor->actor_id }}">
                        Voir les détails
                    </a>
                </td>
            </tr>
            @endforeach
        </table>

        {{ $actors->links() }}
        <footer>
            Hetic 2021 x MySQL Sakila
        </footer>
    </body>
</html>