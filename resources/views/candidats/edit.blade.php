@extends("layout")
@section("title", "Editer un candidat")
@section("content")

<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">

            <div class="container " style="text-color: white" id="title">
                <h1 class="text-center">Déposez votre candidature</h1>
            </div>


	<!-- Si nous avons un candidat $candidat -->
	@if (isset($candidat))

	    <!-- Le formulaire est géré par la route "contats.update" -->
	    <form method="POST" action="{{ route('candidats.update', $candidat) }}" enctype="multipart/form-data" class="mb-10px" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	    <!-- Le formulaire est géré par la route "candidats.store" -->
	    <form class="mb-10px"  enctype="multipart/form-data" method="POST" action="{{ route('candidats.store') }}" >

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
		</div><br>
        <div class="form-group">
			<label for="genre" >Genre</label><span class="text-danger required" aria-hidden="true">*</span> :
            @if (isset($candidat))
                @if ($candidat->genre == "Homme")
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genre" checked='checked' id="inlineRadio1" value="genre">
                        <label class="form-check-label" for="inlineRadio1">Homme</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="Femme">
                        <label class="form-check-label" for="inlineRadio2">Femme</label>
                    </div>
                @endif
            @else
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre"  id="inlineRadio1" value="genre">
                <label class="form-check-label" for="inlineRadio1">Homme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="Femme">
                <label class="form-check-label" for="inlineRadio2">Femme</label>
            </div>
            @endif


			<!-- Le message d'erreur pour "genre" -->
			@error("genre")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div><br>
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
		</div><br>
        <div class="form-group">
			<label for="genre" >Situation matrimoniale</label><span class="text-danger required" aria-hidden="true">*</span> :
            @if (isset($candidat))
                @if ($candidat->situation_familiale == "Célibataire")
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="situation_familiale" checked='checked' id="inlineRadio1" value="Célibataire">
                        <label class="form-check-label" for="inlineRadio1">Célibataire</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="situation_familiale" id="inlineRadio2" value="Marié">
                        <label class="form-check-label" for="inlineRadio2">Marié</label>
                    </div>
                @endif
            @else
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="situation_familiale"  id="inlineRadio1" value="Célibataire">
                <label class="form-check-label" for="inlineRadio1">Célibataire</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="situation_familiale" id="inlineRadio2" value="Marié">
                <label class="form-check-label" for="inlineRadio2">Marié</label>
            </div>
            @endif
			<!-- Le message d'erreur pour "situation_familiale" -->
			@error("situation_familiale")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div><br>
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

			<input class="form-control" type="file" name="avatar"  id="avatar" action="/upload">

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
			<label for="poste_candidate" >Vou postulez pour quel poste</label>
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
		</div><br>
        <div class="form-group">
			<label for="horaire_travail_souhaite" >Heure de travail souhaité</label><span class="text-danger required" aria-hidden="true">*</span> :
            @if (isset($candidat))
                @if ($candidat->horaire_travail_souhaite == "Temps plein")
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="horaire_travail_souhaite" checked='checked' id="inlineRadio1" value="Temps plein">
                        <label class="form-check-label" for="inlineRadio1">Temps plein</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="horaire_travail_souhaite" id="inlineRadio2" value="Temps partiel">
                        <label class="form-check-label" for="inlineRadio2">Temps partiel</label>
                    </div>
					<div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="horaire_travail_souhaite" id="inlineRadio2" value="Mis temps">
                        <label class="form-check-label" for="inlineRadio3">Mis temps</label>
                    </div>
                @endif
            @else
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="horaire_travail_souhaite"  id="inlineRadio1" value="Temps plein">
					<label class="form-check-label" for="inlineRadio1">Temps plein</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="horaire_travail_souhaite" id="inlineRadio2" value="Temps partiel">
					<label class="form-check-label" for="inlineRadio2">Temps partiel</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="horaire_travail_souhaite" id="inlineRadio2" value="Mis temps">
					<label class="form-check-label" for="inlineRadio3">Mis temps</label>
				</div>
            @endif
			<!-- Le message d'erreur pour "horaire_travail_souhaite" -->
			@error("horaire_travail_souhaite")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div><br>
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
		</div><br>
        <div class="form-group">
			<label for="disponible_a_loger" >Estes vous disponible à loger ?</label><span class="text-danger required" aria-hidden="true">*</span> :
            @if (isset($candidat))
                @if ($candidat->disponible_a_loger == "Non")
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="disponible_a_loger" checked='checked' id="inlineRadio1" value="Temps plein">
                        <label class="form-check-label" for="inlineRadio1">Non</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="disponible_a_loger" id="inlineRadio2" value="Oui">
                        <label class="form-check-label" for="inlineRadio2">Oui</label>
                    </div>

                @endif
            @else
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="disponible_a_loger"  id="inlineRadio1" value="Non">
					<label class="form-check-label" for="inlineRadio1">Non</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="disponible_a_loger" id="inlineRadio2" value="Oui">
					<label class="form-check-label" for="inlineRadio2">Oui</label>
				</div>

            @endif
			<!-- Le message d'erreur pour "disponible_a_loger" -->
			@error("disponible_a_loger")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div><br>
        <div class="form-group">
			<label for="nature_contrat" >Nature contrat</label><span class="text-danger required" aria-hidden="true">*</span> :
            @if (isset($candidat))
                @if ($candidat->nature_contrat == "CDD")
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nature_contrat" checked='checked' id="inlineRadio1" value="CDD">
                        <label class="form-check-label" for="inlineRadio1">CDD</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nature_contrat" id="inlineRadio2" value="CDI">
                        <label class="form-check-label" for="inlineRadio2">CDI</label>
                    </div>
                @endif
            @else
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="nature_contrat"  id="inlineRadio1" value="CDD">
					<label class="form-check-label" for="inlineRadio1">CDD</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="nature_contrat" id="inlineRadio2" value="CDI">
					<label class="form-check-label" for="inlineRadio2">CDI</label>
				</div>
            @endif
			<!-- Le message d'erreur pour "nature_contrat" -->
			@error("nature_contrat")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div><br>
        <div class="form-group">
			<label for="oraire_travail_passe" >Heure du travail passé</label><span class="text-danger required" aria-hidden="true">*</span> :
            @if (isset($candidat))
                @if ($candidat->horaire_travail_souhaite == "Temps plein")
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="oraire_travail_passe" checked='checked' id="inlineRadio1" value="Temps plein">
                        <label class="form-check-label" for="inlineRadio1">Temps plein</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="oraire_travail_passe" id="inlineRadio2" value="Temps partiel">
                        <label class="form-check-label" for="inlineRadio2">Temps partiel</label>
                    </div>
					<div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="oraire_travail_passe" id="inlineRadio2" value="Mis temps">
                        <label class="form-check-label" for="inlineRadio3">Mis temps</label>
                    </div>
                @endif
            @else
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="oraire_travail_passe"  id="inlineRadio1" value="Temps plein">
					<label class="form-check-label" for="inlineRadio1">Temps plein</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="oraire_travail_passe" id="inlineRadio2" value="Temps partiel">
					<label class="form-check-label" for="inlineRadio2">Temps partiel</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="oraire_travail_passe" id="inlineRadio2" value="Mis temps">
					<label class="form-check-label" for="inlineRadio3">Mis temps</label>
				</div>
            @endif
			<!-- Le message d'erreur pour "oraire_travail_passe" -->
			@error("oraire_travail_passe")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div><br>

                <!-- Si nous avons un candidat $candidat -->

            <button type="submit" class="btn btn-success btn-block">Modifier</button>




		<h3 class="text-center">Avez vous déjà d'expériences ?</h3>

				<div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <!-- Lien pour ajouter les expériences : "experienceDuCandidats.create" -->
                    <a type="submit" href="{{ route('experienceDuCandidats.create') }}" title="expérences" class="btn btn-success btn-block">Oui</a>
                    <button  type="submit" name="valider" class="btn btn-info btn-block ">Non</button>

                </div>

        </form>



</div>

@endsection





