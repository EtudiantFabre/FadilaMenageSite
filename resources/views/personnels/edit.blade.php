@extends("layout")
@section("title", "Editer un personnel")
@section("content")

	<h1>Enregistrer un personnel</h1>

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
			<label for="genre" >genre</label><br/>
            <select name="genre" id="genre">
                <option value="#" >Choisissez ici</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>

			<!-- Le message d'erreur pour "pièce_identite" -->
			@error("pièce_identite")
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
			<label for="pice_identite" >Pièce d'identité </label><br/>
            <select name="piece_identite" id="piece_identite">
                <option value=" " > </option>
                <option value="Carte nationale">Carte nationale</option>
                <option value="Carte d'électeur">Carte d'électeur</option>
                <option value="Passport">Passport</option>
                <option value="Menagère">Menagère</option>
            </select>

			<!-- Le message d'erreur pour "pièce_identite" -->
			@error("pièce_identite")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="numero_de_piece" >Numéro de la pièce d'identité</label><br/>

			<input type="text" name="numero_de_piece" value="{{ isset($personnel->numero_de_piece) ? $personnel->numero_de_piece : old('numero_de_piece') }}"  id="numero_de_piece" placeholder="Le numéro de vorte carte" >

			<!-- Le message d'erreur pour "numero_de_piece" -->
			@error("numero_de_piece")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_delivrer" >Date delivrer</label><br/>

			<input type="date" name="date_delivrer" value="{{ isset($personnel->date_delivrer) ? $personnel->date_delivrer : old('date_delivrer') }}"  id="date_delivrer" placeholder="date de delivrance de votre carte" >

			<!-- Le message d'erreur pour "date_delivrer" -->
			@error("date_delivrer")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_expiration" >Date d'expiration</label><br/>

			<input type="date" name="date_expiration" value="{{ isset($personnel->date_expiration) ? $personnel->date_expiration : old('date_expiration') }}"  id="date_expiration" placeholder="Date d'expiration" >

			<!-- Le message d'erreur pour "date_expiration" -->
			@error("date_expiration")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="ville_residence" >Ville résidence</label><br/>

			<input type="text" name="ville_residence" value="{{ isset($personnel->ville_residence) ? $personnel->ville_residence : old('ville_residence') }}"  id="ville_residence" placeholder="ville_residence" >

			<!-- Le message d'erreur pour "ville_residence" -->
			@error("ville_residence")
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
			<p>
                <label for="situation_familiale" >Situation Familiale </label><br/>
                <select name="situation_familiale" id="situation_familiale">
                    <option value="#" >Choisissez ici</option>
                    <option value="Carte nationale">Marier</option>
                    <option value="Carte d'électeur">Celibataire</option>

                </select>
			<!-- Le message d'erreur pour "situation_familiale" -->
			@error("situation_familiale")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="enfants_en_charge" >Enfants en charge</label><br/>

			<input type="number" name="enfants_en_charge" value="{{ isset($personnel->enfants_en_charge) ? $personnel->enfants_en_charge : old('enfants_en_charge') }}"  id="enfants_en_charge" placeholder="Combien d'enfants avez vous ?" >

			<!-- Le message d'erreur pour "enfants_en_charge" -->
			@error("enfants_en_charge")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="profession" >Profession actuelle</label><br/>

			<input type="text" name="profession" value="{{ isset($personnel->profession) ? $personnel->profession : old('profession') }}"  id="profession" placeholder="Votre profession actuelle" >

			<!-- Le message d'erreur pour "profession" -->
			@error("profession")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="avatar">Inserez votre photo</label><br/>

			<input type="file" name="avatar"  id="avatar" >

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
			<label for="post_ocuper" >Poste</label><br/>
            <select name="post_ocuper" id="post_ocuper">
                <option value="#" >Choisissez ici</option>
                <option value="Chauffeur">Sécretaire</option>
                <option value="Assistant Secrétaire">Assistant Secrétaire</option>
                <option value="Charger de marketing et Communication">Charger de marketing et Communication</option>
                <option value="Assistant au marketing et communication">Assistant au marketing et communication</option>
                <option value="Comptable">Comptable</option>
                <option value="Assistant au comptable">Assistant au comptable</option>
                <option value="Cahrager de suivit et conrôle">Cahrager de suivit et conrôle</option>
                <option value="Agent de suivit">Agent de suivit</option>
                <option value="Stagiaure">Stagiaure</option>
                <option value="Virgile">Virgile</option>
                <option value="Office manager">Office manager</option>
                <option value="Directeur générale">Directeur générale</option>


            </select>

			<!-- Le message d'erreur pour "post_ocuper" -->
			@error("post_ocuper")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="nature_contrat" >Nature contrat : </label><br/>
            <select name="nature_contrat" id="nature_contrat">
                <option value="#" >Choisissez ici</option>
                <option value="CDD">CDD</option>
                <option value="CDI">CDI</option>
                <option value="Agent d'entretient">Autre</option>

            </select>

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
