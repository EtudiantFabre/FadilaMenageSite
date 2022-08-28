@extends("layout")
@section("title", "Les relances")
@section("content")

	<h1>Les contrats relancés</h1>

	<p>
		<a href="{{ route('relanceContrats.create') }}" title="Créer un relanceContrat" >Enregistrer un nouveau relanceContrat</a>
	</p>

	<!-- Le tableau pour lister les relanceContrats -->
	<table>
		<thead>
			<tr>
				<th>Contrat</th>
                <th>Date relance</th>
                <th>Clien</th>
                <th>Quartier</th>
                <th>Motif</th>
                <th>situation</th>
                <th>nombre contrats en cours</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de relanceContrat -->
			@foreach ($relanceContrats as $relanceContrat)
			<tr>
				<td>
					<!-- Lien pour afficher les relanceContrat : "relanceContrat.show" -->
					<a href="{{ route('relanceContrats.show', $relanceContrat) }}" title="Lire relanceContrat" >{{ $relanceContrat->contrat}}</a>
				</td>
                <td>
					<a href="{{ route('relanceContrats.show', $relanceContrat) }}" title="Lire relanceContrat" >{{ $relanceContrat->date_relance}}</a>
				</td>
                <td>
					<a href="{{ route('relanceContrats.show', $relanceContrat) }}" title="Lire relanceContrat" >{{ $relanceContrat->client}}</a>
				</td>
                <td>
					<a href="{{ route('relanceContrats.show', $relanceContrat) }}" title="Lire relanceContrat" >{{ $relanceContrat->motif}}</a>
				</td>
                <td>
					<a href="{{ route('relanceContrats.show', $relanceContrat) }}" title="Lire relanceContrat" >{{ $relanceContrat->situation}}</a>
				</td>
                <td>
					<a href="{{ route('relanceContrats.show', $relanceContrat) }}" title="Lire relanceContrat" >{{ $relanceContrat->nbr_contrat_encours}}</a>
				</td>
				<td>
					<!-- Lien pour modifier un relanceContrat : "posts.edit" -->
					<a href="{{ route('relanceContrats.edit', $relanceContrat) }}" title="Modifier le relanceContrat" >Modifier</a>
				</td>

				<td>
					<!-- Formulaire pour supprimer un relanceContrat : "posts.destroy" -->
					<form method="POST" action="{{ route('relanceContrats.destroy', $relanceContrat) }}" >
						<!-- CSRF token -->
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
