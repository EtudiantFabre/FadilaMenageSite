@extends("layout")
@section("title", "Experience du candidat")
@section("content")

	<h1>Experience du candidat</h1>

	<!-- Si nous avons un Post $experienceDuCandidat -->
	@if (isset($experienceDuCandidat))

	<!-- Le formulaire est géré par la route "contats.update" -->
	<form method="POST" action="{{ route('experienceDuCandidats.update', $experienceDuCandidat) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "experienceDuCandidats.store" -->
	<form method="POST" action="{{ route('experienceDuCandidats.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="nbr_annee_experience" >Nombre d'année d'expérienc : </label>

			<input type="number" name="nbr_annee_experience" value="{{ isset($experienceDuCandidat->nbr_annee_experience) ? $experienceDuCandidat->agent : old('nbr_annee_experience') }}"  id="nbr_annee_experience">

			<!-- Le message d'erreur pour "nbr_annee_experience" -->
			@error("nbr_annee_experience")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="nbr_voiture_conduit">Nombre de voituer conduit : </label>

			<input type="text" name="nbr_voiture_conduit" value="{{ isset($experienceDuCandidat->nbr_voiture_conduit) ? $experienceDuCandidat->nbr_voiture_conduit : old('nbr_voiture_conduit') }}"  id="nbr_voiture_conduit" placeholder="Expemple : 1 >

			@error("nbr_voiture_conduit")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="type_voiture">Type de voiture : </label>

			<input type="type_voiture" name="type_voiture" value="{{ isset($experienceDuCandidat->type_voiture) ? $experienceDuCandidat->type_voiture : old('type_voiture') }}"  id="type_voiture" placeholder=" Exp : automatique>

			@error("type_voiture")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="type_contrat" >Type de contrat </label>

			<input type="text" name="type_contrat" value="{{ isset($experienceDuCandidat->type_contrat) ? $experienceDuCandidat->type_contrat : old('type_contrat') }}"  id="type_contrat" placeholder=">

			<!-- Le message d'erreur pour "debut_experienceDuCandidat" -->
			@error("debut_experienceDuCandidat")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="adresse_societe" >Adresse du societé : </label>

			<input type="text" name="adresse_societe" value="{{ isset($experienceDuCandidat->adresse_societe) ? $experienceDuCandidat->adresse_societe : old('adresse_societe') }}"  id="adresse_societe" placeholder="Societe où vous avez travaillé" >

			<!-- Le message d'erreur pour "adresse_societe" -->
			@error("adresse_societe")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="adresse_employeur" >Adresse de votre employeur</label><br/>

			<input type="text" name="adresse_employeur" value="{{ isset($experienceDuCandidat->adresse_employeur) ? $experienceDuCandidat->adresse_employeur : old('adresse_employeur') }}"  id="adresse_employeur" placeholder="Adresse de votre ancien employeur" >

			<!-- Le message d'erreur pour "adresse_employeur" -->
			@error("adresse_employeur")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="dernier_salaire" >Votre dernier salaire : </label>

			<input type="text" name="dernier_salaire" value="{{ isset($experienceDuCandidat->dernier_salaire) ? $experienceDuCandidat->dernier_salaire : old('dernier_salaire') }}"  id="dernier_salaire" placeholder="dernier_salaire">

			<!-- Le message d'erreur pour "dernier_salaire" -->
			@error("dernier_salaire")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="pretention_salarial" >Prétention salarial : </label>

			<input type="number" name="pretention_salarial" value="{{ isset($experienceDuCandidat->pretention_salarial) ? $experienceDuCandidat->pretention_salarial : old('pretention_salarial') }}"  id="pretention_salarial">

			<!-- Le message d'erreur pour "pretention_salarial" -->
			@error("pretention_salarial")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
