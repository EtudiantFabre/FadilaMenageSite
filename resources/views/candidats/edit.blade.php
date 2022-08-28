@extends("layout")
@section("title", "Editer un candidat")
@section("content")

	<h1>Editer un contrat</h1>

	<!-- Si nous avons un candidat $candidat -->
	@if (isset($candidat))

	<!-- Le formulaire est géré par la route "contats.update" -->
	<form method="POST" action="{{ route('candidats.update', $candidat) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "candidats.store" -->
	<form method="POST" action="{{ route('candidats.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="nom" >Nom</label><br/>

			<input type="text" name="nom" value="{{ isset($candidat->nom) ? $candidat->nom : old('nom') }}"  id="nom" placeholder="Votre nom" >

			<!-- Le message d'erreur pour "title" -->
			@error("nom")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="prenom" >Prenom</label><br/>

			<input type="text" name="prenom" value="{{ isset($candidat->prenom) ? $candidat->prenom : old('prenom') }}"  id="prenom" placeholder="Votre prenom" >

			<!-- Le message d'erreur pour "prenom" -->
			@error("prenom")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_naissance" >Date de naissance</label><br/>

			<input type="date" name="date_naissance" value="{{ isset($candidat->date_naissance) ? $candidat->date_naissance : old('date_naissance') }}"  id="date_naissance" placeholder="Votre date de naissance" >

			<!-- Le message d'erreur pour "date_naissance" -->
			@error("date_naissance")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="lieu_naissance" >Lieux de naissance</label><br/>

			<input type="text" name="lieu_naissance" value="{{ isset($candidat->lieu_naissance) ? $candidat->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="La ville où vous êtes née" >

			<!-- Le message d'erreur pour "lieu_naissance" -->
			@error("lieu_naissance")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="genre" >Genre</label><br/>

			<select name="genre" id="genre">
                <option value="#" >Choisissez ici</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>

			<!-- Le message d'erreur pour "genre" -->
			@error("genre")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="nationalite" >Nanitonalité</label><br/>

			<input type="text" name="nationalite" value="{{ isset($candidat->nationalite) ? $candidat->nationalite : old('nationalite') }}"  id="nationalite" placeholder="Votre nationalité" >

			<!-- Le message d'erreur pour "nationalite" -->
			@error("nationalite")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="piece_identite" >Pièce d'identité</label><br/>

            <select name="piece_identite" id="piece_identite">
                <option value="#" >Choisissez ici</option>
                <option value="Carte nationale">Carte nationale</option>
                <option value="Carte nationale">Carte d'électeur</option>
                <option value="Carte nationale">Passport</option>

            </select>
			<!-- Le message d'erreur pour "piece_identite" -->
			@error("piece_identite")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="numero_de_piece" >Numéro de la pièce d'identité</label><br/>
			<input type="text" name="numero_de_piece" value="{{ isset($candidat->numero_de_piece) ? $candidat->numero_de_piece : old('numero_de_piece') }}"  id="numero_de_piece" placeholder="Le numéro de vorte carte" >

			<!-- Le message d'erreur pour "numero_de_piece" -->
			@error("numero_de_piece")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_delivrer" >Date delivrer</label><br/>
			<input type="date" name="date_delivrer" value="{{ isset($candidat->date_delivrer) ? $candidat->date_delivrer : old('date_delivrer') }}"  id="date_delivrer" placeholder="date de delivrance de votre carte" >

			<!-- Le message d'erreur pour "date_delivrer" -->
			@error("date_delivrer")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="date_expiration" >Date d'expiration</label><br/>

			<input type="date" name="date_expiration" value="{{ isset($candidat->date_expiration) ? $candidat->date_expiration : old('date_expiration') }}"  id="date_expiration" placeholder="Date d'expiration" >

			<!-- Le message d'erreur pour "date_expiration" -->
			@error("date_expiration")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="ville_residence" >Villle résidence</label><br/>

			<input type="text" name="ville_residence" value="{{ isset($candidat->ville_residence) ? $candidat->ville_residence : old('agent_assigne') }}"  id="ville_residence" placeholder="Votre ville de résidence" >

			<!-- Le message d'erreur pour "ville_residence" -->
			@error("ville_residence")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="quartier" >Quartier</label><br/>

			<input type="text" name="quartier" value="{{ isset($candidat->quartier) ? $candidat->quartier : old('quartier') }}"  id="Votre quartier" placeholder="quartier" >

			<!-- Le message d'erreur pour "quartier" -->
			@error("quartier")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="rue" >Rue</label><br/>

			<input type="text" name="rue" value="{{ isset($candidat->rue) ? $candidat->rue : old('rue') }}"  id="rue" placeholder="Rue">

			<!-- Le message d'erreur pour "rue" -->
			@error("rue")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="email" >Adrees E-mail</label><br/>

			<input type="text" name="email" value="{{ isset($candidat->email) ? $candidat->email : old('email') }}"  id="email" placeholder="email" >

			<!-- Le message d'erreur pour "email" -->
			@error("email")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="situation_familiale" >Situation matrimoniale</label><br/>

			<input type="text" name="situation_familiale" value="{{ isset($candidat->situation_familiale) ? $candidat->situation_familiale : old('marge_nette') }}"  id="situation_familiale" placeholder="Marier ou celibataire" >

			<!-- Le message d'erreur pour "situation_familiale" -->
			@error("situation_familiale")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="enfants_encharge" >Enfants en charge</label><br/>

			<input type="number" name="enfants_encharge" value="{{ isset($candidat->enfants_encharge) ? $candidat->enfants_encharge : old('enfants_encharge') }}"  id="enfants_encharge" placeholder="Combien d'enfants avez vous ?" >

			<!-- Le message d'erreur pour "enfants_encharge" -->
			@error("enfants_encharge")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="profession">Profession</label><br/>

			<input type="text" name="profession" value="{{ isset($candidat->profession) ? $candidat->profession : old('profession') }}"  id="profession" placeholder="Votre profession actuelle" >

			<!-- Le message d'erreur pour "profession" -->
			@error("profession")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <!-- S'il y a une image $post->picture, on l'affiche -->
		@if(isset($candidat->avatar))
		<p>
			<span>Couverture actuelle</span><br/>
			<img src="{{ asset('storage/'.$candidat->avatar) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
		</p>
		@endif

        <p>
			<label for="avatar">Inserez votre photo</label><br/>

			<input type="file" name="avatar"  id="avatar" >

			<!-- Le message d'erreur pour "avatar" -->
			@error("avatar")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="telephone" >Votre numero de téléphone</label><br/>

			<input type="text" name="telephone" value="{{ isset($candidat->telephone) ? $candidat->telephone : old('telephone') }}"  id="telephone" placeholder="Numéro de téléphone" >

			<!-- Le message d'erreur pour "telephone" -->
			@error("telephone")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="poste_candidate" >Poste</label><br/>
            <select name="poste_candidate" id="poste_candidate">
                <option value="#" >Choisissez ici</option>
                <option value="Chauffeur">Chauffeur</option>
                <option value="Nounou">Nounou</option>
                <option value="Agent d'entretient">Agent d'entretient</option>
                <option value="Cuisinier(e)">Cuisinier(e)</option>
                <option value="Menagère">Menagère</option>
            </select>

			<!-- Le message d'erreur pour "poste_candidate" -->
			@error("poste_candidate")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="horaire_travail_souhaite" >Heure de travail souhaite</label><br/>

            <select name="horaire_travail_souhaite" id="horaire_travail_souhaite">
                <option value="#" >Choisissez ici</option>
                <option value="Temps plein">Temps plein</option>
                <option value="Temps partiel">Temps partiel</option>
                <option value="Mi-temps">Mis temps</option>
            </select>
			<!-- Le message d'erreur pour "horaire_travail_souhaite" -->
			@error("horaire_travail_souhaite")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="objectif" >Objectif</label><br/>

			<textarea name="objectif" id="objectif" lang="fr" rows="10" cols="50" placeholder="L'objectif de votre candidature" >{{ isset($candidat->objectif) ? $candidat->objectif : old('objectif') }}</textarea>

			<!-- Le message d'erreur pour "objectif" -->
			@error("objectif")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="qualite_personnelles" >Qualités personnel</label><br/>

			<textarea name="qualite_personnelles" id="qualite_personnelles" lang="fr" rows="10" cols="50" placeholder="vos qualités personnel" >{{ isset($candidat->qualite_personnelles) ? $candidat->qualite_personnelles : old('qualite_personnelles') }}</textarea>

			<!-- Le message d'erreur pour "qualite_personnelles" -->
			@error("qualite_personnelles")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="savoir_faire" >Savoir faire</label><br/>

			<textarea name="savoir_faire" id="savoir_faire" lang="fr" rows="10" cols="50" placeholder="Qu'est ce que vous savez faire d'autre" >{{ isset($candidat->savoir_faire) ? $candidat->savoir_faire : old('savoir_faire') }}</textarea>

			<!-- Le message d'erreur pour "savoir_faire" -->
			@error("savoir_faire")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="disponible_a_loger" >Estes vous disponible à loger?</label><br/>

			<input type="text" name="disponible_a_loger" value="{{ isset($candidat->disponible_a_loger) ? $candidat->disponible_a_loger : old('disponible_a_loger') }}"  id="disponible_a_loger" placeholder="oui/non !" >

			<!-- Le message d'erreur pour "disponible_a_loger" -->
			@error("disponible_a_loger")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="nature_contrat" >Nature du contrat</label><br/>
            <select name="nature_contrat" id="nature_contrat">
                <option value="#" >Choisissez ici</option>
                <option value="CDD">CDD</option>
                <option value="CDI">CDI</option>
                <option value="Contrat de formation">Contrat de formation</option>
                <option value="Autres">Autres</option>
            </select>
			<!-- Le message d'erreur pour "nature_contrat" -->
			@error("nature_contrat")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="oraire_travail_passe" >Horaire de travail passé</label><br/>

            <select name="oraire_travail_passe" id="oraire_travail_passe">
                <option value="#" >Choisissez ici</option>
                <option value="Temps plein">Temps plein</option>
                <option value="Temps partiel">Temps partiel</option>
                <option value="Mi-temps">Mis temps</option>
            </select>
			<!-- Le message d'erreur pour "oraire_travail_passe" -->
			@error("oraire_travail_passe")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
