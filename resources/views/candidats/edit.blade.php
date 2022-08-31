@extends("layout")
@section("title", "Editer un candidat")
@section("content")

    <div class="container-fluid">
        <div class="row">
            <div class="container " style="background: orangered" id="title">
                <h1>Vous avez bésoin d'un travail ? Créer votre profil en remplissant les fourmulaires ci-dessous</h1>
            </div>


	<!-- Si nous avons un candidat $candidat -->
	@if (isset($candidat))

	    <!-- Le formulaire est géré par la route "contats.update" -->
	    <form method="POST" action="{{ route('candidats.update', $candidat) }}" class="mb-10px" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	    <!-- Le formulaire est géré par la route "candidats.store" -->
	    <form method="POST" action="{{ route('candidats.store') }}" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<div class="form-group">
			<label for="nom" >Nom</label>

			<input type="text" name="nom" value="{{ isset($candidat->nom) ? $candidat->nom : old('nom') }}"  id="nom" placeholder="Votre nom" class="form-control" >

			<!-- Le message d'erreur pour "title" -->
			@error("nom")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="prenom" >Prenom</label>

			<input type="text" name="prenom" value="{{ isset($candidat->prenom) ? $candidat->prenom : old('prenom') }}"  id="prenom" placeholder="Votre prenom" class="form-control" >

			<!-- Le message d'erreur pour "prenom" -->
			@error("prenom")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="date_naissance" >Date de naissance</label>

			<input type="date" name="date_naissance" value="{{ isset($candidat->date_naissance) ? $candidat->date_naissance : old('date_naissance') }}"  id="date_naissance" placeholder="Votre date de naissance" class="form-control" class="form-control" >

			<!-- Le message d'erreur pour "date_naissance" -->
			@error("date_naissance")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="lieu_naissance" >Lieux de naissance</label>

			<input type="text" name="lieu_naissance" value="{{ isset($candidat->lieu_naissance) ? $candidat->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="La ville où vous êtes née" class="form-control">

			<!-- Le message d'erreur pour "lieu_naissance" -->
			@error("lieu_naissance")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="genre" >Genre</label>

			<select name="genre" id="genre" class="form-control">
                <option value="#" >Choisissez ici</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>

			<!-- Le message d'erreur pour "genre" -->
			@error("genre")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="nationalite" >Nanitonalité</label>

			<input type="text" name="nationalite" value="{{ isset($candidat->nationalite) ? $candidat->nationalite : old('nationalite') }}"  id="nationalite" placeholder="Votre nationalité" class="form-control" >

			<!-- Le message d'erreur pour "nationalite" -->
			@error("nationalite")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="piece_identite" >Pièce d'identité</label>

            <select name="piece_identite" id="piece_identite" class="form-control">
                <option value="#" >Choisissez ici</option>
                <option value="Carte nationale">Carte nationale</option>
                <option value="Carte nationale">Carte d'électeur</option>
                <option value="Carte nationale">Passport</option>

            </select>
			<!-- Le message d'erreur pour "piece_identite" -->
			@error("piece_identite")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="numero_de_piece" >Numéro de la pièce d'identité</label>
			<input type="text" name="numero_de_piece" value="{{ isset($candidat->numero_de_piece) ? $candidat->numero_de_piece : old('numero_de_piece') }}"  id="numero_de_piece" placeholder="Le numéro de vorte carte" class="form-control" >

			<!-- Le message d'erreur pour "numero_de_piece" -->
			@error("numero_de_piece")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="date_delivrer" >Date delivrer</label>
			<input type="date" name="date_delivrer" value="{{ isset($candidat->date_delivrer) ? $candidat->date_delivrer : old('date_delivrer') }}"  id="date_delivrer" placeholder="date de delivrance de votre carte"  class="form-control">

			<!-- Le message d'erreur pour "date_delivrer" -->
			@error("date_delivrer")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="date_expiration" >Date d'expiration</label>

			<input type="date" name="date_expiration" value="{{ isset($candidat->date_expiration) ? $candidat->date_expiration : old('date_expiration') }}"  id="date_expiration" placeholder="Date d'expiration" class="form-control">

			<!-- Le message d'erreur pour "date_expiration" -->
			@error("date_expiration")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="ville_residence" >Villle résidence</label>

			<input type="text" name="ville_residence" value="{{ isset($candidat->ville_residence) ? $candidat->ville_residence : old('agent_assigne') }}"  id="ville_residence" placeholder="Votre ville de résidence" class="form-control">

			<!-- Le message d'erreur pour "ville_residence" -->
			@error("ville_residence")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="quartier" >Quartier</label>

			<input type="text" name="quartier" value="{{ isset($candidat->quartier) ? $candidat->quartier : old('quartier') }}"  id="Votre quartier" placeholder="quartier" class="form-control">

			<!-- Le message d'erreur pour "quartier" -->
			@error("quartier")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="rue" >Rue</label>

			<input type="text" name="rue" value="{{ isset($candidat->rue) ? $candidat->rue : old('rue') }}"  id="rue" placeholder="Rue" class="form-control">

			<!-- Le message d'erreur pour "rue" -->
			@error("rue")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="email" >Adrees E-mail</label>

			<input type="text" name="email" value="{{ isset($candidat->email) ? $candidat->email : old('email') }}"  id="email" placeholder="email" class="form-control">

			<!-- Le message d'erreur pour "email" -->
			@error("email")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="situation_familiale" >Situation matrimoniale</label>

			<input type="text" name="situation_familiale" value="{{ isset($candidat->situation_familiale) ? $candidat->situation_familiale : old('marge_nette') }}"  id="situation_familiale" placeholder="Marier ou celibataire" class="form-control">

			<!-- Le message d'erreur pour "situation_familiale" -->
			@error("situation_familiale")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="enfants_encharge" >Enfants en charge</label>

			<input class="form-control" type="number" name="enfants_encharge" value="{{ isset($candidat->enfants_encharge) ? $candidat->enfants_encharge : old('enfants_encharge') }}"  id="enfants_encharge" placeholder="Combien d'enfants avez vous ?" >

			<!-- Le message d'erreur pour "enfants_encharge" -->
			@error("enfants_encharge")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="profession">Profession</label>

			<input class="form-control" type="text" name="profession" value="{{ isset($candidat->profession) ? $candidat->profession : old('profession') }}"  id="profession" placeholder="Votre profession actuelle" >

			<!-- Le message d'erreur pour "profession" -->
			@error("profession")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>

        <!-- S'il y a une image $post->picture, on l'affiche -->
		@if(isset($candidat->avatar))
		<div class="form-group">
			<span>Couverture actuelle</span>
			<img src="{{ asset('storage/'.$candidat->avatar) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
		</div>
		@endif

        <div class="form-group">
			<label for="avatar">Inserez votre photo</label>

			<input class="form-control" type="file" name="avatar"  id="avatar" >

			<!-- Le message d'erreur pour "avatar" -->
			@error("avatar")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="telephone" >Votre numero de téléphone</label>

			<input class="form-control" type="text" name="telephone" value="{{ isset($candidat->telephone) ? $candidat->telephone : old('telephone') }}"  id="telephone" placeholder="Numéro de téléphone" >

			<!-- Le message d'erreur pour "telephone" -->
			@error("telephone")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="poste_candidate" >Poste</label>
            <select class="form-control" name="poste_candidate" id="poste_candidate">
                <option value="#" >Choisissez ici</option>
                <option value="Chauffeur">Chauffeur</option>
                <option value="Nounou">Nounou</option>
                <option value="Agent d'entretient">Agent d'entretient</option>
                <option value="Cuisinier(e)">Cuisinier(e)</option>
                <option value="Menagère">Menagère</option>
            </select>

			<!-- Le message d'erreur pour "poste_candidate" -->
			@error("poste_candidate")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="horaire_travail_souhaite" >Heure de travail souhaite</label>

            <select class="form-control" name="horaire_travail_souhaite" id="horaire_travail_souhaite">
                <option value="#" >Choisissez ici</option>
                <option value="Temps plein">Temps plein</option>
                <option value="Temps partiel">Temps partiel</option>
                <option value="Mi-temps">Mis temps</option>
            </select>
			<!-- Le message d'erreur pour "horaire_travail_souhaite" -->
			@error("horaire_travail_souhaite")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="objectif" >Objectif</label>

			<textarea class="form-control" name="objectif" id="objectif"  placeholder="L'objectif de votre candidature" >{{ isset($candidat->objectif) ? $candidat->objectif : old('objectif') }}</textarea>

			<!-- Le message d'erreur pour "objectif" -->
			@error("objectif")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="qualite_personnelles" >Qualités personnel</label>

			<textarea class="form-control" name="qualite_personnelles" id="qualite_personnelles"  placeholder="vos qualités personnel" >{{ isset($candidat->qualite_personnelles) ? $candidat->qualite_personnelles : old('qualite_personnelles') }}</textarea>

			<!-- Le message d'erreur pour "qualite_personnelles" -->
			@error("qualite_personnelles")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="savoir_faire" >Savoir faire</label>

			<textarea class="form-control" name="savoir_faire" id="savoir_faire"  placeholder="Qu'est ce que vous savez faire d'autre" >{{ isset($candidat->savoir_faire) ? $candidat->savoir_faire : old('savoir_faire') }}</textarea>

			<!-- Le message d'erreur pour "savoir_faire" -->
			@error("savoir_faire")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="disponible_a_loger" >Estes vous disponible à loger?</label>

			<input class="form-control" type="text" name="disponible_a_loger" value="{{ isset($candidat->disponible_a_loger) ? $candidat->disponible_a_loger : old('disponible_a_loger') }}"  id="disponible_a_loger" placeholder="oui/non !" >

			<!-- Le message d'erreur pour "disponible_a_loger" -->
			@error("disponible_a_loger")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="nature_contrat" >Nature du contrat</label>
            <select class="form-control" name="nature_contrat" id="nature_contrat">
                <option value="#" >Choisissez ici</option>
                <option value="CDD">CDD</option>
                <option value="CDI">CDI</option>
                <option value="Contrat de formation">Contrat de formation</option>
                <option value="Autres">Autres</option>
            </select>
			<!-- Le message d'erreur pour "nature_contrat" -->
			@error("nature_contrat")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="oraire_travail_passe" >Horaire de travail passé</label>

            <select class="form-control" name="oraire_travail_passe" id="oraire_travail_passe">
                <option value="#" >Choisissez ici</option>
                <option value="Temps plein">Temps plein</option>
                <option value="Temps partiel">Temps partiel</option>
                <option value="Mi-temps">Mis temps</option>
            </select>
			<!-- Le message d'erreur pour "oraire_travail_passe" -->
			@error("oraire_travail_passe")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>

                <!-- Si nous avons un candidat $candidat -->
	        @if (isset($candidat))

            <button type="submit" class="btn btn-success btn-block">Modifier</button>
        </form>

     @else
     <button type="submit" class="btn btn-success btn-block">Pas d'expériences</button>

    </form>

    <div class="form-group">
        <form style="margin: 50px "  action="{{ route('experienceDuCandidats.create') }}"  >
            <button type="submit" class="btn btn-warning btn-block">Vos expériences</button>
        </form>
    </div>



    @endif

        </div>
    </div>

@endsection
