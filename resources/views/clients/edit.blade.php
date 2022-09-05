@extends("layout")
@section("title", "Editer un client")
@section("content")

<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
    


	<!-- Si nous avons un client $client -->
	@if (isset($client))
		<div class="container " style="text-color: white" id="title">
			<h1 class="text-center">Editer un client</h1>
		</div>
		<!-- Le formulaire est géré par la route "client.update" -->
		<form method="POST" action="{{ route('clients.update', $client) }}"  class="mb-10px">

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "clients.store" -->
		<div class="container " style="text-color: white" id="title">
			<h1 class="text-center">Créer un client</h1>
		</div>
		<form method="POST" action="{{ route('clients.store') }}" enctype="multipart/form-data">

	@endif

		<!-- Le token CSRF -->
		@csrf

		<div class="form-group">
			<label for="nom">Nom</label><br/>

			<input class="form-control" type="text" name="nom" value="{{ isset($client->nom) ? $client->nom : old('nom') }}"  id="nom" placeholder="Entrez votre nom" >

			<!-- Le message d'erreur pour "nom" -->
			@error("nom")
			<div>{{ $message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="tel" >Numéro de téléphone</label><br/>

			<input class="form-control" type="text" name="tel" value="{{ isset($client->tel) ? $client->tel : old('tel') }}"  id="tel" placeholder="numéro téléphone" >

			<!-- Le message d'erreur pour "tel" -->
			@error("tel")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="ville" >Ville</label><br/>

			<input class="form-control" type="text" name="ville" value="{{ isset($client->ville) ? $client->ville : old('ville') }}"  id="ville" placeholder="Votre ville de résidence" >

			<!-- Le message d'erreur pour "ville" -->
			@error("ville")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="quartier">Quartier</label><br/>

			<input class="form-control" type="text" name="quartier" value="{{ isset($client->quartier) ? $client->quartier : old('quartier') }}"  id="quartier" placeholder="Votre quartier" >

			<!-- Le message d'erreur pour "quartier" -->
			@error("quartier")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="email">Adresse email</label><br/>

			<input class="form-control" type="text" name="email" value="{{ isset($client->email) ? $client->email : old('email') }}"  id="email" placeholder="votre adresse email" >

			<!-- Le message d'erreur pour "email" -->
			@error("email")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="type_service_rechercher" >Quel type de services rechercer vous ?</label><br/><span class="text-danger required" aria-hidden="true">*</span> :
            @if (isset($candidat))
            @if ($candidat->genre == "Nounou")
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type_service_rechercher" checked='checked' id="inlineRadio1" value="Nounou">
                    <label class="form-check-label" for="inlineRadio1">Nounou</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Cusinier">
                    <label class="form-check-label" for="inlineRadio2">Cuisinier</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Netoyage et entretient">
                    <label class="form-check-label" for="inlineRadio2">Netoyage et entretient</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Aide-menagère">
                    <label class="form-check-label" for="inlineRadio2">Cuisinier</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Chaffeure">
                    <label class="form-check-label" for="inlineRadio2">Chaffeure</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Conception de pannier cadeau">
                    <label class="form-check-label" for="inlineRadio2">Conception de pannier cadeau</label>
                </div>
            @endif
        @else
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type_service_rechercher"  id="inlineRadio1" value="Nounou">
            <label class="form-check-label" for="inlineRadio1">Nounou</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Cusinier">
            <label class="form-check-label" for="inlineRadio2">Cuisinier</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Netoyage et entretient">
            <label class="form-check-label" for="inlineRadio2">Netoyage et entretient</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Aide-menagère">
            <label class="form-check-label" for="inlineRadio2">Cuisinier</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Chaffeure">
            <label class="form-check-label" for="inlineRadio2">Chaffeure</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Conception de pannier cadeau">
            <label class="form-check-label" for="inlineRadio2">Conception de pannier cadeau</label>
        </div>
        @endif

			<!-- Le message d'erreur pour "type_service_rechercher" -->
			@error("type_service_rechercher")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="frequence_souhaiter" >Frequence souhaité</label><br/>

			<input class="form-control" type="number" name="frequence_souhaiter" value="{{ isset($client->frequence_souhaiter) ? $client->frequence_souhaiter : old('frequence_souhaiter') }}"  id="frequence_souhaiter" placeholder="Fréquence souhaité" >

			<!-- Le message d'erreur pour "frequence_souhaiter" -->
			@error("frequence_souhaiter")
			<div>{{ $message }}</div>
			@enderror
		</div>
		<br>
		<div >
			<input class="btn btn-secondary" type="submit" name="valider" value="Valider" >
		</div>
		

	</form>
</div>

@endsection
