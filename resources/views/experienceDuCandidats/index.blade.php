@extends("layout")
@section("title", "Expériences des candidats")
@section("content")

	<h1 class="text-center">Expériences de candidats</h1>
<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">

	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<!-- Lien pour créer un nouvel contrat : "contrat.create" -->
		<a class="btn btn-success btn-block" href="{{ route('experienceDuCandidats.create') }}" title="Enregistrer" >Ajoutez vos expériences</a>
	</div>


	<table class="table table-primary table-hover table-striped rounded table-bordered border-primary text-center table-curved justify-content-center">
		<thead>
			<tr>
				<th>Numéro</th>
                <th>Candidat</th>
                <th>Nombre d'années d'expérience</th>
                <th>Type de voiture conduit</th>
                <th>Type de contrat</th>
                <th>Adresse société</th>
                <th>Adresse employeur</th>
				<th colspan="3">Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($experienceDuCandidats as $experienceDuCandidat)
			<tr>
				<td>
                    {{ $experienceDuCandidat->id_experienceDuCandidat}}
                </td>
                <td>
                    {{ $experienceDuCandidat->candidat}}
                </td>
                <td>
                    {{ $experienceDuCandidat->nbr_annee_experience}}
                </td>
                <td>

                    {{ $experienceDuCandidat->type_voiture}}
                </td>
                <td>

                    {{ $experienceDuCandidat->type_contrat}}
                </td>
                <td>

                    {{ $experienceDuCandidat->adresse_societe}}
                </td>
                <td>

                    {{ $experienceDuCandidat->adresse_employeur}}
                </td>

                <td>
                    <a href="{{ route('experienceDuCandidats.edit', $experienceDuCandidat) }}" title="Modifier">Modifier</a>
                </td>
                <td>
                    <a href="{{ route('experienceDuCandidats.show', $experienceDuCandidat) }}" title="Afficher plus">Afficher</a>
                </td>

				<td>
					<!-- Formulaire pour supprimer un contrat : "posts.destroy" -->
					<form method="POST" action="{{ route('experienceDuCandidats.destroy', $experienceDuCandidat) }}" >
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
