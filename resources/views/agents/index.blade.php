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
            <th>Rue</th>
            <th>Email</th>
            <th>Situation de famille</th>
            <th>Nombre d'enfent en charge</th>
            <th>Profession</th>
            <th>Photo</th>
            <th>Avatar</th>
            <th>Date retenu</th>
            <th>Numéro de téléphone</th>
            <th>Disponibilité</th>
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

                {{ $agent->date_delivrer}}
            </td>
            <td>

                {{ $agent->date_expiration}}
            </td>
            <td>

                {{ $agent->ville_residence}}
            </td>
            <td>

                {{ $agent->quartier}}
            </td>
            <td>

                {{ $agent->rue}}
            </td>
            <td>

                {{ $agent->email}}
            </td>
            <td>

                {{ $agent->situation_familiale}}
            </td>
            <td>

                {{ $agent->enfants_encharge}}
            </td>
            <td>

                {{ $agent->profession}}
            </td>
            <td>

                {{ $agent->photo_id}}
            </td>
            <td>

                {{ $agent->avatar}}
            </td>
            <td>

                {{ $agent->date_retenu}}
            </td>
            <td>

                {{ $agent->telephone}}
            </td>
            <td>

                {{ $agent->status}}
            </td>
            <td>
                <!-- Lien pour modifier une manifestation : "agents.edit" -->
                <a href="{{ route('agents.edit', $agent) }}" title="Modifier manifestation">Modifier</a>
            </td>
            <td>
                <!-- Formulaire pour supprimer une manifestation : "agents.destroy" -->
                <form method="POST" action="{{ route('agents.destroy', $agent) }}" >
                    <!-- CSRF token -->
                    @csrf
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    @method("DELETE")
                    <input type="submit" value="Supprimer" >
                </form>
            </td>
            <td>
                <!-- Lien pour modifier une manifestation : "agents.edit" -->
                <a href="{{ route('agents.show', $agent) }}" title="Modifier manifestation">Afficher</a>
            </td>
            <td>
                <!-- Lien pour modifier une manifestation : "agents.edit" -->
                <a href="{{ route('agents.edit', $agent) }}" title="Modifier manifestation">Envoyer un mail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
