@extends("layout")
@section("title", "Tous les contrats")
@section("content")

	<h1>Tous les contrats</h1>

	<p>
		<!-- Lien pour créer un nouvel contrat : "contrat.create" -->
		<a href="{{ route('contrats.create') }}" title="Créer un contrat" >Enregistrer un nouveau contrat</a>
	</p>

	<!-- Le tableau pour lister les contrats -->
	<table>
		<thead>
			<tr>
				<th>Agent</th>
                <th>Client</th>
                <th>Date signé</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($contrats as $contrat)
			<tr>
				<td>
					<!-- Lien pour afficher un contrat : "contrat.show" -->
					<a href="{{ route('contrats.show', $contrat) }}" title="Lire contrat" >{{ $contrat->agent}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un contrat: "contrat.show" -->
					<a href="{{ route('contrats.show', $contrat) }}" title="Lire contrat" >{{ $contrat->client}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un contrat: "contrat.show" -->
					<a href="{{ route('contrats.show', $contrat) }}" title="Lire contrat" >{{ $contrat->date_contrat}}</a>
				</td>
				<td>
					<!-- Lien pour modifier un contrat : "posts.edit" -->
					<a href="{{ route('contrats.edit', $contrat) }}" title="Modifier l'article" >Modifier</a>
				</td>

				<td>
					<!-- Formulaire pour supprimer un contrat : "posts.destroy" -->
					<form method="POST" action="{{ route('contrats.destroy', $contrat) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
