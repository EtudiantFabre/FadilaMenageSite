@extends("layout")
@section("title", "Editer un personnel")
@section("content")

	<h1>Editer un personne</h1>

	<!-- Si nous avons un personnel $personnel -->
	@if (isset($personnel))

	<!-- Le formulaire est géré par la route "contats.update" -->
	<form method="POST" action="{{ route('personnels.update', $personnel) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "personnels.store" -->
	<form method="POST" action="{{ route('personnels.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="nom" >Nom</label><br/>

			<input type="text" name="nom" value="{{ isset($personnel->nom) ? $personnel->nom : old('nom') }}"  id="nom" placeholder="Votre nom" >

			<!-- Le message d'erreur pour "nom" -->
			@error("nom")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="prenom" >Prenom</label><br/>

			<input type="text" name="prenom" value="{{ isset($personnel->prenom) ? $personnel->prenom : old('prenom') }}"  id="prenom" placeholder="Votre prenom" >

			<!-- Le message d'erreur pour "prenom" -->
			@error("prenom")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_naissance" >Date de naissance</label><br/>

			<input type="date" name="date_naissance" value="{{ isset($personnel->date_naissance) ? $personnel->date_naissance : old('date_naissance') }}"  id="date_naissance" placeholder="Votre date de naissance" >

			<!-- Le message d'erreur pour "date_naissance" -->
			@error("date_naissance")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="lieu_naissance" >Lieux de naissance</label><br/>

			<input type="text" name="lieu_naissance" value="{{ isset($personnel->lieu_naissance) ? $personnel->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="La ville où vous êtes née" >

			<!-- Le message d'erreur pour "lieu_naissance" -->
			@error("lieu_naissance")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="genre" >Genre</label><br/>

			<input type="text" name="genre" value="{{ isset($personnel->genre) ? $personnel->genre : old('genre') }}"  id="genre" placeholder="Sexe" >

			<!-- Le message d'erreur pour "genre" -->
			@error("genre")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="nationalite" >Nanitonalité</label><br/>

			<input type="text" name="nationalite" value="{{ isset($personnel->nationalite) ? $personnel->nationalite : old('nationalite') }}"  id="nationalite" placeholder="Votre nationalité" >

			<!-- Le message d'erreur pour "nationalite" -->
			@error("nationalite")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="piece_identite" >Pièce d'identité</label><br/>

			<input type="text" name="piece_identite" value="{{ isset($personnel->piece_identite) ? $personnel->piece_identite : old('piece_identite') }}"  id="piece_identite" placeholder="pièce d'dentité" >

			<!-- Le message d'erreur pour "piece_identite" -->
			@error("piece_identite")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="numero_de_piece" >Nuéro de la pièce d'identité</label><br/>

			<input type="text" name="numero_de_piece" value="{{ isset($personnel->numero_de_piece) ? $personnel->numero_de_piece : old('numero_de_piece') }}"  id="numero_de_piece" placeholder="Le numéro de vorte carte" >

			<!-- Le message d'erreur pour "numero_de_piece" -->
			@error("numero_de_piece")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_delivrer" >Date delivrer</label><br/>

			<input type="text" name="date_delivrer" value="{{ isset($personnel->date_delivrer) ? $personnel->date_delivrer : old('date_delivrer') }}"  id="date_delivrer" placeholder="date de delivrance de votre carte" >

			<!-- Le message d'erreur pour "date_delivrer" -->
			@error("date_delivrer")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_expiration" >Date d'expiration</label><br/>

			<input type="text" name="date_expiration" value="{{ isset($personnel->date_expiration) ? $personnel->date_expiration : old('date_expiration') }}"  id="date_expiration" placeholder="Date d'expiration" >

			<!-- Le message d'erreur pour "date_expiration" -->
			@error("date_expiration")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="agent_assigne" >Agent Assigné</label><br/>

			<input type="text" name="agent_assigne" value="{{ isset($personnel->agent_assigne) ? $personnel->agent_assigne : old('agent_assigne') }}"  id="agent_assigne" placeholder="Agent" >

			<!-- Le message d'erreur pour "agent_assigne" -->
			@error("agent_assigne")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="quartier" >Quartier</label><br/>

			<input type="text" name="quartier" value="{{ isset($personnel->quartier) ? $personnel->quartier : old('quartier') }}"  id="Votre quartier" placeholder="quartier" >

			<!-- Le message d'erreur pour "quartier" -->
			@error("quartier")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="rue" >Rue</label><br/>

			<input type="text" name="rue" value="{{ isset($personnel->rue) ? $personnel->rue : old('rue') }}"  id="rue" placeholder="Rue">

			<!-- Le message d'erreur pour "rue" -->
			@error("rue")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="email" >Adrees E-mail</label><br/>

			<input type="text" name="email" value="{{ isset($personnel->email) ? $personnel->email : old('email') }}"  id="email" placeholder="email" >

			<!-- Le message d'erreur pour "email" -->
			@error("email")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="situation_familiale" >Situation matrimoniale</label><br/>

			<input type="text" name="situation_familiale" value="{{ isset($personnel->situation_familiale) ? $personnel->situation_familiale : old('marge_nette') }}"  id="situation_familiale" placeholder="Marier ou celibataire" >

			<!-- Le message d'erreur pour "situation_familiale" -->
			@error("situation_familiale")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="enfants_encharge" >Enfants en charge</label><br/>

			<input type="text" name="enfants_encharge" value="{{ isset($personnel->enfants_encharge) ? $personnel->enfants_encharge : old('enfants_encharge') }}"  id="enfants_encharge" placeholder="Combien d'enfants avez vous ?" >

			<!-- Le message d'erreur pour "enfants_encharge" -->
			@error("enfants_encharge")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="profession" >Profession</label><br/>

			<input type="text" name="profession" value="{{ isset($personnel->profession) ? $personnel->profession : old('profession') }}"  id="profession" placeholder="Votre profession actuelle" >

			<!-- Le message d'erreur pour "profession" -->
			@error("profession")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="photo_id" >Inserez votre photo</label><br/>

			<input type="text" name="photo_id" value="{{ isset($personnel->photo_id) ? $personnel->photo_id : old('photo_id') }}"  id="photo_id">

			<!-- Le message d'erreur pour "photo_id" -->
			@error("photo_id")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="avatar" >Avatar</label><br/>

			<input type="text" name="avatar" value="{{ isset($personnel->avatar) ? $personnel->avatar : old('avatar') }}"  id="avatar" placeholder="Avatar" >

			<!-- Le message d'erreur pour "avatar" -->
			@error("avatar")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="salaire" >Salaire</label><br/>

			<input type="number" name="salaire" value="{{ isset($personnel->salaire) ? $personnel->salaire : old('salaire') }}"  id="salaire" placeholder="salaire du personnel" >

			<!-- Le message d'erreur pour "salaire" -->
			@error("salaire")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="poste_candidate" >Poste</label><br/>

			<input type="text" name="post_ocuper" value="{{ isset($personnel->post_ocuper) ? $personnel->post_ocuper : old('post_ocuper') }}"  id="post_ocuper" placeholder="le poste occuper" >

			<!-- Le message d'erreur pour "post_ocuper" -->
			@error("post_ocuper")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="nature_contrat" >Nature contrat</label><br/>

			<input type="text" name="nature_contrat" value="{{ isset($personnel->nature_contrat) ? $personnel->nature_contrat : old('nature_contrat') }}"  id="nature_contrat">

			<!-- Le message d'erreur pour "nature_contrat" -->
			@error("nature_contrat")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="telephone" >Numéro de téléphone</label><br/>

			<input type="text" name="telephone" value="{{ isset($personnel->telephone) ? $personnel->telephone : old('objectif') }}"  id="telephone" placeholder="telephone">

			<!-- Le message d'erreur pour "telephone" -->
			@error("telephone")
			<div>{{ $message }}</div>
			@enderror
		</p>


		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
