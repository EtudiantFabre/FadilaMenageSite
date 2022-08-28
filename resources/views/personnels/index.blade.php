@extends("layout")
@section("title", "Liste des personnels")
@section("content")

	<h1>Tous les personnels</h1>

	<p>
		<!-- Lien pour créer un nouvel personnel : "personnel.create" -->
		<a href="{{ route('personnels.create') }}" title="Créer un personnel" >Déposer votre personnelure</a>
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
                <th>Rue</th>
                <th>Adresse email</th>
                <th>Situation matrimoniale</th>
                <th>Nombre d'enfants</th>
                <th>Profession</th>
                <th>Avatar</th>
                <th>Salaire</th>
                <th>Poste ocupper</th>
                <th>Nature personnel</th>
                <th>Numéro de téléphone</th>
				<th colspan="3" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de personnel -->
			@foreach ($personnels as $personnel)
			<tr>
				<td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->id_personnel}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->nom}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->prenom}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->date_naissance}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->lieu_naissance}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->genre}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->nationalite}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->piece_identite}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->numero_de_piece}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->date_delivrer}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->ville_residence}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->quartier}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->rue}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->email}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->situation_familiale}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->enfants_encharge}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->profession}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->avatar}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->salaire}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->post_ocuper}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->nature_contrat}}</a>
				</td>
                <td>
					<a href="{{ route('personnels.show', $personnel) }}" title="Lire personnel" >{{ $personnel->telephone}}</a>
				</td>

                <td>
					<!-- Lien pour modifier un personnel : "posts.edit" -->
					<a href="{{ route('personnels.edit', $personnel) }}" title="Modifier le personnel">Modifier</a>
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

