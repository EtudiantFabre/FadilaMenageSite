@extends("layout")
@section("title", "Editer un agent")
@section("content")

	<h1>Editer un agent</h1>

	<!-- Si nous avons un Agent $agent -->
	@if (isset($agent))

	<!-- Le formulaire est géré par la route "agents.update" -->
	<form method="POST" action="{{ route('agents.update', $agent) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "agents.store" -->
	<form method="POST" action="{{ route('agents.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="nom" >Nom : </label><br/>

			<!-- S'il y a un $agent->title, on complète la valeur de l'input -->
			<input type="text" name="nom" value="{{ isset($agent->nom) ? $agent->nom : old('nom') }}"  id="nom" placeholder="Le nom de l'agent" ><br>
			<input type="text" name="prenom" value="{{ isset($agent->prenom) ? $agent->prenom : old('prenom') }}"  id="prenom" placeholder="Le prenom de l'agent" ><br>
			<input type="date" name="lieunaiss" value="{{ isset($agent->date_naissance) ? $agent->date_naissance : old('date_naissance') }}"  id="date_naissance" placeholder="La date de naissance" ><br>
			<input type="text" name="gente" value="{{ isset($agent->lieu_naissance) ? $agent->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="Lieux de naissance" ><br>
			<input type="text" name="nationalité" value="{{ isset($agent->genre) ? $agent->genre : old('genre') }}"  id="genre" placeholder="Sex" ><br>
			<input type="text" name="piècedid" value="{{ isset($agent->nationalite) ? $agent->nationalite : old('nationalite') }}"  id="nationalite" placeholder="Nationalité" ><br>
			<input type="text" name="numerodepiece" value="{{ isset($agent->numero_de_piece) ? $agent->numero_de_piece : old('numero_de_piece') }}"  id="numero_de_piece" placeholder="Numero de pèce" ><br>
			<input type="date" name="datedediliv" value="{{ isset($agent->date_delivrer) ? $agent->date_delivrer : old('date_delivrer') }}"  id="date_delivrer" placeholder="Date de délivrence" ><br>
			<input type="date" name="dateexpiration" value="{{ isset($agent->date_expiration) ? $agent->date_expiration : old('date_expiration') }}"  id="date_expiration" placeholder="Date d'expiration" ><br>
			<input type="text" name="villeresidence" value="{{ isset($agent->ville_residence) ? $agent->ville_residence : old('ville_residence') }}"  id="ville_residence" placeholder="ville de residence" ><br>
			<input type="text" name="quartier" value="{{ isset($agent->quartier) ? $agent->quartier : old('quartier') }}"  id="quartier" placeholder="Quartier" ><br>
			<input type="text" name="rue" value="{{ isset($agent->rue) ? $agent->rue : old('rue') }}"  id="rue" placeholder="Rue" ><br>
			<input type="text" name="email" value="{{ isset($agent->email) ? $agent->email : old('email') }}"  id="email" placeholder="email" ><br>
			<input type="text" name="situationfamille" value="{{ isset($agent->situation_familiale) ? $agent->situation_familiale : old('situation_familiale') }}"  id="situation_familiale" placeholder="situation familiale" ><br>
			<input type="text" name="nbrenfans" value="{{ isset($agent->enfants_encharge) ? $agent->enfants_encharge : old('enfants_encharge}') }}"  id="enfants_encharge}" placeholder="Le nombre d'enfants en charge" ><br>
			<input type="text" name="profession" value="{{ isset($agent->profession) ? $agent->profession : old('profession') }}"  id="profession" placeholder="Profession : " ><br>
			<input type="text" name="avatar" value="{{ isset($agent->avatar) ? $agent->avatar : old('avatar') }}"  id="avatar" placeholder="Avatar" ><br>
			<input type="text" name="dateretenu" value="{{ isset($agent->date_retenu) ? $agent->date_retenu : old('date_retenu') }}"  id="date_retenu" placeholder="La date où il est retenu : " ><br>
			<input type="text" name="telephone" value="{{ isset($agent->telephone) ? $agent->telephone : old('telephone') }}"  id="telephone}" placeholder="Nu méro de téléphone" ><br>
			<input type="text" name="disponibilite" value="{{ isset($agent->status) ? $agent->status : old('status') }}"  id="status" placeholder="diponible ?" ><br>


		</p>

        <!-- S'il y a une image $agent->picture, on l'affiche -->
		@if(isset($agent->photo_id))
		<p>
			<span>Couverture actuelle</span><br/>
			<img src="{{ asset('storage/'.$agent->photo_id) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
		</p>
		@endif


		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
