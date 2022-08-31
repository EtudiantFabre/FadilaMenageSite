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
					{{ $relanceContrat->contrat}}
				</td>
                <td>
					{{ $relanceContrat->date_relance}}
				</td>
                <td>
					{{ $relanceContrat->client}}
				</td>
                <td>
					{{ $relanceContrat->motif}}
				</td>
                <td>
					{{ $relanceContrat->situation}}
				</td>
                <td>
					{{ $relanceContrat->nbr_contrat_encours}}
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
