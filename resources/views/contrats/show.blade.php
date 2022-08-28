@extends("layout")
@section("title", $contrat->client)
@section("content")

	<h1>{{ $contrat->agent }}</h1>

	<!-- Le tableau pour lister les contrats -->
	<table>
		<thead>
			<tr>
				<th>Agent</th>
                <th>Client</th>
                <th>Date signé</th>
				<th>debut du contrat</th>
                <th>Echeance</th>
                <th>service</th>
                <th>local</th>
                <th>Adresse</th>
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
            <td>{{ $contrat->adresse}}</td>
            <td>{{ $contrat->temps}}</td>
            <td>{{ $contrat->frequence}}</td>
            <td>{{ $contrat->agent_assigne}}</td>
            <td>{{ $contrat->facturation}}</td>
            <td>{{ $contrat->salaire}}</td>
            <td>{{ $contrat->tva}}</td>
            <td>{{ $contrat->marge_nette}}</td>
            <td>{{ $contrat->status}}</td>
        </tbody>

	<p><a href="{{ route('contrat.index') }}" title="Retourner aux articles" >Retourner aux contrats</a></p>

@endsection
