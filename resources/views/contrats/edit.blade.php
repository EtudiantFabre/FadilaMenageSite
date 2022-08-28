@extends("layout")
@section("title", "Editer un contrat")
@section("content")

	<h1>Editer un contrat</h1>

	<!-- Si nous avons un Post $contrat -->
	@if (isset($contrat))

	<!-- Le formulaire est géré par la route "contats.update" -->
	<form method="POST" action="{{ route('contrats.update', $contrat) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "contrats.store" -->
	<form method="POST" action="{{ route('contrats.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="Agent" >Agent</label><br/>
            <select name="id_agent">
                @foreach ($agents as $agent)
                    <option value="agent">{{$agent['id_agent']}}  {{$agnet['nom'].' '.$agent['prenom']}}</option>
                @endforeach
            </select>

			<!-- Le message d'erreur pour "agent" -->
			@error("agent")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="Client" >Client</label><br/>

            <select name="id_client">
                @foreach ($clients as $client)
                    <option value="client">{{$client['client']}}  {{$client['nom'].' '.$client['prenom']}}</option>
                @endforeach
            </select>

			<!-- Le message d'erreur pour "client" -->
			@error("client")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_contrat" >Date de signature</label><br/>

			<input type="date" name="date_contrat" value="{{ isset($contrat->date_contrat) ? $contrat->date_contrat : old('date_contrat') }}"  id="date_contrat" placeholder="Date de signature" >

			<!-- Le message d'erreur pour "date_contrat" -->
			@error("date_contrat")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="debut_contrat" >Début du contrat</label><br/>

			<input type="date" name="debut_contrat" value="{{ isset($contrat->debut_contrat) ? $contrat->debut_contrat : old('debut_contrat') }}"  id="debut_contrat" placeholder="Le debut du contrat" >

			<!-- Le message d'erreur pour "debut_contrat" -->
			@error("debut_contrat")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="echeance_contrat" >Echeance du contrat</label><br/>

			<input type="text" name="echeance_contrat" value="{{ isset($contrat->echeance_contrat) ? $contrat->echeance_contrat : old('echeance_contrat') }}"  id="echeance_contrat" placeholder="Echéance contrat" >

			<!-- Le message d'erreur pour "echeance_contrat" -->
			@error("echeance_contrat")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="service" >Service</label><br/>

			<input type="text" name="service" value="{{ isset($contrat->service) ? $contrat->service : old('service') }}"  id="service" placeholder="Le service" >

			<!-- Le message d'erreur pour "service" -->
			@error("service")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="local" >Local</label><br/>

			<input type="text" name="local" value="{{ isset($contrat->local) ? $contrat->local : old('local') }}"  id="local" placeholder="local" >

			<!-- Le message d'erreur pour "local" -->
			@error("local")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="adresse" >Adresse</label><br/>

			<input type="text" name="adresse" value="{{ isset($contrat->adresse) ? $contrat->adresse : old('adresse') }}"  id="adresse" placeholder="Adresse du client" >

			<!-- Le message d'erreur pour "adresse" -->
			@error("adresse")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="temps" >Temps</label><br/>

			<input type="text" name="temps" value="{{ isset($contrat->temps) ? $contrat->temps : old('temps') }}"  id="temps" placeholder="Temps" >

			<!-- Le message d'erreur pour "service" -->
			@error("temps")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="frequence" >Frequence</label><br/>

			<input type="text" name="frequence" value="{{ isset($contrat->frequence) ? $contrat->frequence : old('frequence') }}"  id="frequence" placeholder="Frequence" >

			<!-- Le message d'erreur pour "frequence" -->
			@error("frequence")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="agent_assigne" >Agent Assigné</label><br/>

			<input type="text" name="agent_assigne" value="{{ isset($contrat->agent_assigne) ? $contrat->agent_assigne : old('agent_assigne') }}"  id="agent_assigne" placeholder="Agent" >

			<!-- Le message d'erreur pour "service" -->
			@error("service")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="facturation" >Facturation</label><br/>

			<input type="number" name="facturation" value="{{ isset($contrat->facturation) ? $contrat->facturation : old('facturation') }}"  id="facturation" placeholder="facture" >

			<!-- Le message d'erreur pour "facturation" -->
			@error("facturation")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="salaire" >Salaire</label><br/>

			<input type="number" name="salaire" value="{{ isset($contrat->salaire) ? $contrat->salaire : old('salaire') }}"  id="salaire" placeholder="Le salaire" >

			<!-- Le message d'erreur pour "salaire" -->
			@error("salaire")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="tva" >Tva</label><br/>

			<input type="number" name="tva" value="{{ isset($contrat->tva) ? $contrat->tva : old('tva') }}"  id="tva" placeholder="tva" >

			<!-- Le message d'erreur pour "service" -->
			@error("tva")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="marge_nette" >Marge nettte</label><br/>

			<input type="text" name="marge_nette" value="{{ isset($contrat->marge_nette) ? $contrat->marge_nette : old('marge_nette') }}"  id="marge_nette" placeholder="Marge nette" >

			<!-- Le message d'erreur pour "marge_nette" -->
			@error("marge_nette")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="status" >Status</label><br/>

			<input type="text" name="status" value="{{ isset($contrat->status) ? $contrat->status : old('status') }}"  id="status" placeholder="Contrat encours ?" >

			<!-- Le message d'erreur pour "status" -->
			@error("status")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
