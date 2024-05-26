@extends("layout")
@section("title", $contrat->client)
@section("content")

	<h1 class="text-center">{{ $contrat->agent }}</h1>
<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">

	<!-- Le tableau pour lister les contrats -->
	<table class="table table-primary table-hover table-striped rounded table-bordered border-primary text-center table-curved justify-content-center">
		<thead>
			<tr>
				<th>Agent</th>
                <th>Client</th>
                <th>Date signé</th>
				<th>debut du contrat</th>
                <th>Echeance</th>
                <th>service</th>
                <th>local</th>

                <th>Temps</th>
                <th>Frequence</th>
                <th>Agent assigne</th>
                <th>Facturation</th>
                <th>Salaire</th>
                <th>tva</th>
                <th>Marge nette</th>
                <th>Status</th>
			</tr>
		</thead>
        <tbody>
            <td>{{ $contrat->agent}}</td>
            <td>{{ $contrat->client}}</td>
            <td>{{ $contrat->date_contrat}}</td>
            <td>{{ $contrat->debut_contrat}}</td>
            <td>{{ $contrat->echeance_contrat}}</td>
            <td>{{ $contrat->service}}</td>
            <td>{{ $contrat->local}}</td>
            <td>{{ $contrat->temps}}</td>
            <td>{{ $contrat->frequence}}</td>
            <td>{{ $contrat->agent_assigne}}</td>
            <td>{{ $contrat->facturation}}</td>
            <td>{{ $contrat->salaire}}</td>
            <td>{{ $contrat->tva}}</td>
            <td>{{ $contrat->marge_nette}}</td>
            <td>{{ $contrat->status}}</td>
        </tbody>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-block" href="{{ route('contrat.index') }}" title="Retourner aux articles" >Retourner aux contrats</a>
        </div>
</div>
@endsection
