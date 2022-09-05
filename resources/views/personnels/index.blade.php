@extends("layout")
@section("title", "Liste des personnels")
@section("content")

	<h1 class="text-center">Tous les personnels</h1>
<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <!-- Lien pour créer un nouvel personnel : "personnel.create" -->
        <a class="btn btn-success btn-block" href="{{ route('personnels.create') }}" title="Créer un personnel" >Eregistrer un nouveau personnel</a>
    </div><br>

	<!-- Le tableau pour lister les personnels -->
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
					{{ $personnel->date_expiration}}
				</td>
                <td>
					{{ $personnel->ville_residence}}
				</td>
                <td>
					{{ $personnel->quartier}}
				</td>



                <td>
					<!-- Lien pour modifier un personnel : "posts.edit" -->
					<a class="btn btn-success btn-block" href="{{ route('personnels.edit', $personnel) }}" title="Modifier le personnel">Modifier</a>
				</td>

                <td>
					<!-- Lien pour modifier un personnel : "posts.edit" -->
					<a class="btn btn-info btn-block" href="{{ route('personnels.show', $personnel) }}" title="Modifier le personnel">Afficher</a>
				</td>



				<td>
					<!-- Formulaire pour supprimer un personnel : "posts.destroy" -->
					<form method="POST" action="{{ route('personnels.destroy', $personnel) }}" >
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

