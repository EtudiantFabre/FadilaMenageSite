@extends("layout")
@section("title", "Les vente mensuelles")
@section("content")

	<h1>Tous les ventes par mois</h1>

	<p>
		<!-- Lien pour créer un nouvel vente : "vente.create" -->
		<a href="{{ route('ventes.create') }}" title="Créer un vente" >Enregistrer un nouveau vente</a>
	</p>

	<!-- Le tableau pour lister les ventes -->
	<table>
		<thead>
			<tr>
				<th>Personnel</th>
                <th>Mois</th>
                <th>Contrat permanent</th>
                <th>Contrat permanent perdut</th>
                <th>Contrat gagne</th>
                <th>Contrats gané</th>
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
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->personnel}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->mois}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->contrat_permanent}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->contrat_permanent_perdus}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->contrat_gagne}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->solde_contrat}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->contrat_ponctuel}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->marche_public}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->commentaire}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->total_client_findu_mois}}</a>
				</td>
                <td>
					<!-- Lien pour afficher un vente: "vente.show" -->
					<a href="{{ route('ventes.show', $vente) }}" title="Lire vente" >{{ $vente->ca_total_mensuel_realiser }}</a>
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

@endsection
