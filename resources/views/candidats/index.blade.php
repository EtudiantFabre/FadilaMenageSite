@extends("layout")
@section("title", "Liste des candidats")
@section("content")

<div class="container" style="background: orangered">
    <h1>Liste des candidats</h1>

    <p>
		<!-- Lien pour créer un nouvel contrat : "contrat.create" -->
		<a href="{{ route('candidats.create') }}" title="Créer un candidat" >Déposer votre candidature</a>
	</p>

</div><br>



	<!-- Le tableau pour lister les candidats -->
    <div class="container">
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
				<th colspan="3" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de candidat -->
			@foreach ($candidats as $candidat)
			<tr>
				<td>
					{{ $candidat->id_candidat}}
				</td>
                <td>
					{{ $candidat->nom}}
				</td>
                <td>
					{{ $candidat->prenom}}
				</td>
                <td>
					{{ $candidat->date_naissance}}
				</td>
                <td>
					{{ $candidat->lieu_naissance}}
				</td>
                <td>
					{{ $candidat->genre}}
				</td>
                <td>
					{{ $candidat->nationalite}}
				</td>
                <td>
					{{ $candidat->piece_identite}}
				</td>
                <td>
					{{ $candidat->numero_de_piece}}
				</td>
                <td>
					{{ $candidat->date_delivrer}}
				</td>
                <td>
					{{ $candidat->date_expiration}}
				</td>
				<td>
					<!-- Lien pour modifier un contrat : "posts.edit" -->
					<a href="{{ route('candidats.show', $candidat) }}" title="Afficher le candidat" >Afficher</a>
				</td>
                <td>
					<!-- Lien pour modifier un contrat : "posts.edit" -->
					<a href="{{ route('candidats.edit', $candidat) }}" title="Modifier la candidature" >Modifier</a>
				</td>

				<td>
					<!-- Formulaire pour supprimer un contrat : "posts.destroy" -->
					<form method="POST" action="{{ route('candidats.destroy', $candidat) }}" >
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
</div>

@endsection

