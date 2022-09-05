@extends("layout")
@section("title", "Liste des candidats")
@section("content")





    <h1 class="text-center">Liste des candidats</h1>
	<!-- Le tableau pour lister les candidats -->
<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <!-- Lien pour créer un nouvel contrat : "contrat.create" -->
        <a href="{{ route('candidats.create') }}" title="Créer un candidat" class="btn btn-success btn-block">Déposer votre candidature</a><br>

    </div><br><br>

	<table class="table table-primary table-hover table-striped rounded table-bordered border-primary text-center table-curved justify-content-center">
		<thead style="background-color: orangered">
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
					<a class="btn btn-info btn-block" href="{{ route('candidats.show', $candidat) }}" title="Afficher le candidat" >Afficher</a>
				</td>
                <td>
					<!-- Lien pour modifier un contrat : "posts.edit" -->
					<a class="btn btn-success btn-block" href="{{ route('candidats.edit', $candidat) }}" title="Modifier la candidature" >Modifier</a>
				</td>

				<td>
					<!-- Formulaire pour supprimer un contrat : "posts.destroy" -->
					<form method="POST" action="{{ route('candidats.destroy', $candidat) }}" >
						<!-- CSRF token -->
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

