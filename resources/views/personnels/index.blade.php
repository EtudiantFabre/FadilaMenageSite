@extends("layout")
@section("title", "Liste des personnels")
@section("content")

	<h1>Tous les personnels</h1>

	<p>
		<!-- Lien pour créer un nouvel personnel : "personnel.create" -->
	<a href="{{ route('personnels.create') }}" title="Créer un personnel" >Eregistrer un nouveau personnel</a>
	</p>

	<!-- Le tableau pour lister les personnels -->
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
				<th colspan="3" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de personnel -->
			@foreach ($personnels as $personnel)
			<tr>
				<td>
					{{ $personnel->id_personnel}}
				</td>
                <td>
					{{ $personnel->nom}}
				</td>
                <td>
					{{ $personnel->prenom}}
				</td>
                <td>
					{{ $personnel->date_naissance}}
				</td>
                <td>
					{{ $personnel->lieu_naissance}}
				</td>
                <td>
					{{ $personnel->genre}}
				</td>
                <td>
					{{ $personnel->nationalite}}
				</td>
                <td>
					{{ $personnel->piece_identite}}
				</td>
                <td>
					{{ $personnel->numero_de_piece}}
				</td>
                <td>
					{{ $personnel->date_delivrer}}
				</td>
                <td>
					{{ $personnel->ville_residence}}
				</td>
                <td>
					{{ $personnel->quartier}}
				</td>

                <td>
					<!-- Lien pour modifier un personnel : "posts.edit" -->
					<a href="{{ route('personnels.edit', $personnel) }}" title="Modifier le personnel">Modifier</a>
				</td>

                <td>
					<!-- Lien pour modifier un personnel : "posts.edit" -->
				<a href="{{ route('personnels.show', $personnel) }}" title="Modifier le personnel">Afficher</a>
				</td>

				<td>
					<!-- Formulaire pour supprimer un personnel : "posts.destroy" -->
					<form method="POST" action="{{ route('personnels.destroy', $personnel) }}" >
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

