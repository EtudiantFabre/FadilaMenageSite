@extends("layout")
@section("title", "Tous les contrats")
@section("content")

	<h1 class="text-center">Tous les contrats</h1>
  <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">

	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<!-- Lien pour créer un nouvel contrat : "contrat.create" -->
		<a class="btn btn-success btn-block" href="{{ route('contrats.create') }}" title="Créer un contrat" >Enregistrer un nouveau contrat</a>
	</div>

	<!-- Le tableau pour lister les contrats -->
	<table class="table table-primary table-hover table-striped rounded table-bordered border-primary text-center table-curved justify-content-center">
		<thead>
			<tr>
                <th>Numéro</th>
				<th>Agent</th>
                <th>Client</th>
                <th>Date signé</th>
				<th>debut du contrat</th>
                <th>Echeance</th>
                <th>service</th>
                <th>local</th>

                <th>Temps</th>
                <th>Frequence</th>
                <th>Salaire</th>
                <th>tva</th>
                <th>Marge nette</th>
                <th>Facturation</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($contrats as $contrat)
			<tr>
                    <td>{{ $contrat->id_contrat}}</td>
                    <td>{{ $contrat->agent}}</td>
                    <td>{{ $contrat->client}}</td>
                    <td>{{ $contrat->date_contrat}}</td>
                    <td>{{ $contrat->debut_contrat}}</td>
                    <td>{{ $contrat->echeance_contrat}}</td>
                    <td>{{ $contrat->service}}</td>
                    <td>{{ $contrat->local}}</td>

                    <td>{{ $contrat->temps}}</td>
                    <td>{{ $contrat->frequence}}</td>
                    <td>{{ $contrat->salaire}}</td>
                    <td>{{ $contrat->tva}}</td>
                    <td>{{ $contrat->marge_nette}}</td>
                    <td>{{ $contrat->facturation}}</td>
                    <td>{{ $contrat->status}}</td>
                    <td>
                        <!-- Lien pour modifier un cantrat : "contrats.edit" -->
                        <a href="{{ route('contrats.edit', $contrat) }}" title="Modifier le contrat">Modifier</a>
                    </td>

                    <td>
                        <!-- Lien pour Afficher un contrat : "contrat.edit" -->
                    <a href="{{ route('contrats.show', $contrat) }}" title="Afficher le contrat">Afficher</a>
                    </td>
				<td>
					<!-- Formulaire pour supprimer un contrat : "posts.destroy" -->
					<form method="POST" action="{{ route('contrats.destroy', $contrat)}}" >
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
