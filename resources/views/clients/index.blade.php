@extends("layout")
@section("title", "Les clients")
@section("content")

	<h1 class="text-center">Tous les clients</h1>

    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">

            <!-- Lien pour créer un nouvel client : "client.create" -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

            <a href="{{ route('clients.create') }}" title="Créer un client" class="btn btn-success btn-block" >Enregistrer un nouveau client</a>
        </div><br>



	        <!-- Le tableau pour lister les clients -->
            <table class="table table-primary table-hover table-striped rounded table-bordered border-primary text-center table-curved justify-content-center">
                <thead style="background-color: orangered">
                    <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Numéro de téléphone</th>
                        <th>Ville</th>
                        <th>Quartier</th>
                        <th>Email</th>
                        <th>Type de service rechercer</th>
                        <th>Frequence souhaité </th>
                        <th colspan="2">Opérations</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- On parcourt la collection de client -->
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id_client}}</td>
                        <td>{{ $client->nom}}</td>
                        <td>{{ $client->tel}}</td>
                        <td>{{ $client->ville}}</td>
                        <td>{{ $client->quartier}}</td>
                        <td>{{ $client->email}}</td>
                        <td>{{ $client->type_service_rechercher}}</td>
                        <td>{{ $client->frequence_souhaiter}}</td>

                        <td>
                            <!-- Lien pour modifier un client : "posts.edit" -->
                            <a class="btn btn-info btn-block" href="{{ route('clients.edit', $client) }}" title="Modifier le client" type="submit" >Modifier</a>
                        </td>
                        <td>
                            <!-- Formulaire pour supprimer un client : "posts.destroy" -->
                            <form method="POST" action="{{ route('clients.destroy', $client) }}" >
                                @csrf
                                <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                @method("DELETE")
                                <input class="btn btn-danger btn-block" type="submit" value="Supprimer" >
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
