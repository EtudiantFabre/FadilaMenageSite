@extends('layout')
 @section('title',"Liste des agents")
 @section('content')

 <h1 class="text-center">Liste des agents</h1>
 <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <!-- Lien pour créer un nouvel personnel : "personnel.create" -->
        <a class="btn btn-success btn-block" href="{{ route('agents.create') }}" title="Créer un agent" >Recurter un nouveau agents</a>
    </div><br>

<!-- Le tableau pour lister les agents -->
<table class="table table-primary table-hover table-striped rounded table-bordered border-primary text-center table-curved justify-content-center">
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
                <a class="btn btn-success btn-block" href="{{ route('agents.edit', $agent) }}" title="Modifier">Modifier</a>
            </td>
            <td>
                <form method="POST" action="{{ route('agents.destroy', $agent) }}" >

                    @csrf
                    @method("DELETE")
                    <input class="btn btn-danger btn-block" type="submit" value="Supprimer" >
                </form>
            </td>
            <td>
                <a class="btn btn-info btn-block"href="{{ route('agents.show', $agent) }}" title="Afficher plus">Afficher</a>
            </td>
            <td>
                <a class="btn btn-info btn-block" href="{{ route('agents.index', $agent) }}" title="envoiyer un meil">Envoyer un mail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
