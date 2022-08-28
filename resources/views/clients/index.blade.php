@extends("layout")
@section("title", "Les clients")
@section("content")

	<h1>Tous les clients</h1>

	<p>
		<!-- Lien pour créer un nouvel client : "client.create" -->
		<a href="{{ route('clients.create') }}" title="Créer un client" >Enregistrer un nouveau client</a>
	</p>

	<!-- Le tableau pour lister les clients -->
	<table>
		<thead>
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
					<a href="{{ route('clients.edit', $client) }}" title="Modifier le client" type="submit" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un client : "posts.destroy" -->
					<form method="POST" action="{{ route('clients.destroy', $client) }}" >
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
