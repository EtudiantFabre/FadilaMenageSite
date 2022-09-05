@extends("layout")
@section("title", "Les vente mensuelles")
@section("content")

	<h1 class="text-center">Les ventes par mois</h1>
<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<!-- Lien pour créer une nouvel vente : "vente.create" -->
		<a class="btn btn-success btn-block" href="{{ route('ventes.create') }}" title="Créer un vente" >Enregistrer une nouvelle vente</a>
	</div><br><br>

	<!-- Le tableau pour lister les ventes -->
	<table class="table table-primary table-hover table-striped rounded table-bordered border-primary text-center table-curved justify-content-center">
		<thead style="background-color: orangered">
			<tr>
				<th>Personnel</th>
                <th>Mois</th>
                <th>Contrat permanent</th>
                <th>Contrat permanent perdut</th>
                <th>Contrat gagné</th>
                <th>Solde</th>
                <th>Contrat ponctuel</th>
                <th>Marche public</th>
                <th>Commentaire</th>
                <th>Total clients à la fin du mois</th>
                <th>Ca mensuel realiser</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($ventes as $vente)
			<tr>
				<td>
					<!-- Lien pour afficher un vente : "vente.show" -->
					{{ $vente->personnel}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->mois}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->contrat_permanent}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->contrat_permanent_perdus}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->contrat_gagne}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->solde_contrat}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->contrat_ponctuel}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->marche_public}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->commentaire}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->total_client_findu_mois}}
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					{{ $vente->ca_total_mensuel_realiser }}
				</td>
				<td>
					<!-- Lien pour modifier un vente : "posts.edit" -->
					<a href="{{ route('ventes.edit', $vente) }}" title="Modifier la vente" >Modifier</a>
				</td>

				<td>
					<!-- Formulaire pour supprimer un vente : "posts.destroy" -->
					<form method="POST" action="{{ route('ventes.destroy', $vente) }}" >
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
</div>
@endsection
