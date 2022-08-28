@extends("layout")
@section("title", "Editer un client")
@section("content")

	<h1>Editer un client</h1>

	<!-- Si nous avons un client $client -->
	@if (isset($client))

	<!-- Le formulaire est géré par la route "client.update" -->
	<form method="POST" action="{{ route('clients.update', $client) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "clients.store" -->
	<form method="POST" action="{{ route('clients.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="nom">Nom</label><br/>

			<input type="text" name="nom" value="{{ isset($client->nom) ? $client->nom : old('nom') }}"  id="nom" placeholder="Entrez votre nom" >

			<!-- Le message d'erreur pour "nom" -->
			@error("nom")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="tel" >Numéro de téléphone</label><br/>

			<input type="text" name="tel" value="{{ isset($client->tel) ? $client->tel : old('tel') }}"  id="tel" placeholder="numéro téléphone" >

			<!-- Le message d'erreur pour "tel" -->
			@error("tel")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="ville" >Ville</label><br/>

			<input type="text" name="ville" value="{{ isset($client->ville) ? $client->ville : old('ville') }}"  id="ville" placeholder="Votre ville de résidence" >

			<!-- Le message d'erreur pour "ville" -->
			@error("ville")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="quartier">Quartier</label><br/>

			<input type="text" name="quartier" value="{{ isset($client->quartier) ? $client->quartier : old('quartier') }}"  id="quartier" placeholder="Votre quartier" >

			<!-- Le message d'erreur pour "quartier" -->
			@error("quartier")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="email">Adresse email</label><br/>

			<input type="text" name="email" value="{{ isset($client->email) ? $client->email : old('email') }}"  id="email" placeholder="votre adresse email" >

			<!-- Le message d'erreur pour "email" -->
			@error("email")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="type_service_rechercher" >Service rechercher</label><br/>

			<input type="text" name="type_service_rechercher" value="{{ isset($client->type_service_rechercher) ? $client->type_service_rechercher : old('type_service_rechercher') }}"  id="type_service_rechercher">

			<!-- Le message d'erreur pour "type_service_rechercher" -->
			@error("type_service_rechercher")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="frequence_souhaiter" >Frequence souhaité</label><br/>

			<input type="number" name="frequence_souhaiter" value="{{ isset($client->frequence_souhaiter) ? $client->frequence_souhaiter : old('frequence_souhaiter') }}"  id="frequence_souhaiter" placeholder="Fréquence souhaité" >

			<!-- Le message d'erreur pour "frequence_souhaiter" -->
			@error("frequence_souhaiter")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
