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
