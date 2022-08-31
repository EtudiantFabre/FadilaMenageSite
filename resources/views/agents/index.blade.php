<<<<<<< HEAD
@extends('layout')

 @section('title')

 @section('content')

 <h1>Les manifestations </h1>


<!-- Le tableau pour lister les agents -->
<table>
    <thead>
        <tr>
            <th>Numero</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Dante de Naissance</th>
            <th>Lieu de naissance</th>
            <th>Genre</th>
            <th>Nationalité</th>
            <th>Pièce d'identité</th>
            <th>Numéro de pièce</th>
            <th>Date de delivrance</th>
            <th>Date d'expiration</th>
            <th>Ville résidence</th>
            <th>Quartier</th>
            <th colspan="4">Opérations</th>
        </tr>
    </thead>
    <tbody>
        <!-- On parcourt la collection d'agents -->
        @foreach ($agents as $agent)
        <tr>

            <td>
                {{ $agent->id_agent}}
            </td>
            <td>
                {{ $agent->nom}}
            </td>
            <td>

                {{ $agent->prenom}}
            </td>
            <td>

                {{ $agent->date_naissance}}
            </td>
            <td>

                {{ $agent->lieu_naissance}}
            </td>
            <td>

                {{ $agent->genre}}
            </td>
            <td>

                {{ $agent->nationalite}}
            </td>
            <td>

                {{ $agent->piece_identite}}
            </td>
            <td>

                {{ $agent->numero_de_piece}}
            </td>


            <td>

                {{ $agent->ville_residence}}
            </td>
            <td>

                {{ $agent->quartier}}
            </td>

            <td>
                <a href="{{ route('agents.edit', $agent) }}" title="Modifier">Modifier</a>
            </td>
            <td>
                <form method="POST" action="{{ route('agents.destroy', $agent) }}" >

                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Supprimer" >
                </form>
            </td>
            <td>
                <a href="{{ route('agents.show', $agent) }}" title="Afficher plus">Afficher</a>
            </td>
            <td>
                <a href="{{ route('agents.index', $agent) }}" title="envoiyer un meil">Envoyer un mail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Agents</title>
</head>
<body>
    <h1>Liste des agents</h1>
    <table>
        <tr>
            <th>N° Agent</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>Date de Naissance</th>
            <th>Lieu de Naissance</th>
            <th>Genre</th>
            <th>Nationalite</th>
            <th>Piece d'identite</th>
            <th>N° piece</th>
            <th>Date delivrance</th>
            <th>Date d'Expiration</th>
            <th>Ville de residence</th>
            <th>Quartier</th>
            <th>Rue</th>
            <th>Email</th>
            <th>Situation Familial</th>
            <th>Nbre d'enfant en charge</th>
            <th>Proffession</th>
            <th>Avatar</th>
            <th>Date retenu</th>
            <th>Status</th>
        </tr>
    </table>
</body>
</html>
>>>>>>> main
