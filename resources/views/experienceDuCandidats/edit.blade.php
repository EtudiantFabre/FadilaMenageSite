@extends("layout")
@section("title", "Experience du candidat")
@section("content")
<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">

    @if (isset($experienceDuCandidat))
    <div class="container " style="text-color: white" id="title">
	    <h1 class="text-center">Modifiez votre expériences</h1>
    </div>
	@else
    <div class="container " style="text-color: white" id="title">
	    <h1 class="text-center">Modifiez votre expériences</h1>
    </div>
    @endif
	<!-- Si nous avons un  $experienceDuCandidat -->
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

		<div class="form-group">
			<label for="nbr_annee_experience" >Nombre d'année d'expérienc : </label>

			<input class="form-control" type="number" name="nbr_annee_experience" value="{{ isset($experienceDuCandidat->nbr_annee_experience) ? $experienceDuCandidat->agent : old('nbr_annee_experience') }}"  id="nbr_annee_experience">

			<!-- Le message d'erreur pour "nbr_annee_experience" -->
			@error("nbr_annee_experience")
			<div>{{ $message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="nbr_voiture_conduit">Nombre de voituer conduit : </label>

			<input class="form-control" type="text" name="nbr_voiture_conduit" value="{{ isset($experienceDuCandidat->nbr_voiture_conduit) ? $experienceDuCandidat->nbr_voiture_conduit : old('nbr_voiture_conduit') }}"  id="nbr_voiture_conduit" placeholder="Expemple : 1" >

			@error("nbr_voiture_conduit")
			<div>{{ $message }}</div>
			@enderror
        </div>
        <div class="form-group">
			<label for="type_voiture">Type de voiture : </label>

			<input class="form-control" type="type_voiture" name="type_voiture" value="{{ isset($experienceDuCandidat->type_voiture) ? $experienceDuCandidat->type_voiture : old('type_voiture') }}"  id="type_voiture" placeholder=" Exp : automatique">

			@error("type_voiture")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="type_contrat" >Type de contrat </label>

			<input class="form-control" type="text" name="type_contrat" value="{{ isset($experienceDuCandidat->type_contrat) ? $experienceDuCandidat->type_contrat : old('type_contrat') }}"  id="type_contrat">

			<!-- Le message d'erreur pour "type_contrat" -->
			@error("type_contrat")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="adresse_societe" >Adresse du societé : </label>

			<input class="form-control" type="text" name="adresse_societe" value="{{ isset($experienceDuCandidat->adresse_societe) ? $experienceDuCandidat->adresse_societe : old('adresse_societe') }}"  id="adresse_societe" placeholder="Societe où vous avez travaillé" >

			<!-- Le message d'erreur pour "adresse_societe" -->
			@error("adresse_societe")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="adresse_employeur" >Adresse de votre employeur</label><br/>

			<input class="form-control" type="text" name="adresse_employeur" value="{{ isset($experienceDuCandidat->adresse_employeur) ? $experienceDuCandidat->adresse_employeur : old('adresse_employeur') }}"  id="adresse_employeur" placeholder="Adresse de votre ancien employeur" >

			<!-- Le message d'erreur pour "adresse_employeur" -->
			@error("adresse_employeur")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="dernier_salaire" >Votre dernier salaire : </label>

			<input class="form-control" type="text" name="dernier_salaire" value="{{ isset($experienceDuCandidat->dernier_salaire) ? $experienceDuCandidat->dernier_salaire : old('dernier_salaire') }}"  id="dernier_salaire" placeholder="dernier_salaire">

			<!-- Le message d'erreur pour "dernier_salaire" -->
			@error("dernier_salaire")
			<div>{{ $message }}</div>
			@enderror
		</div>

        <div class="form-group">
			<label for="date_demission" >Date de démission : </label>

			<input class="form-control" type="date" name="date_demission" value="{{ isset($experienceDuCandidat->date_demission) ? $experienceDuCandidat->date_demission : old('date_demission') }}"  id="date_demission" placeholder="date_demission">

			<!-- Le message d'erreur pour "dernier_salaire" -->
			@error("dernier_salaire")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="pretention_salarial" >Prétention salarial : </label>

			<input class="form-control" type="number" name="pretention_salarial" value="{{ isset($experienceDuCandidat->pretention_salarial) ? $experienceDuCandidat->pretention_salarial : old('pretention_salarial') }}"  id="pretention_salarial">

			<!-- Le message d'erreur pour "pretention_salarial" -->
			@error("pretention_salarial")
			<div>{{ $message }}</div>
			@enderror
		</div>

        <div class="form-group">
			<label for="Candidat" >Choisissez votre nom</label><br/>
            <select name="id_candidat">
                @foreach ($candidats as $candidat)
                    <option value="{{$candidat['id_candidat']}}">{{$candidat['id_candidat']}}  {{$candidat['nom'].' '.$candidat['prenom']}}</option>
                @endforeach
            </select>

			<!-- Le message d'erreur pour "candidat" -->
			@error("candidat")
			<div>{{ $message }}</div>
			@enderror
		</div><br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-success btn-block form-control">ENREGISTREZ</button>
        </div>
	</form>
</div>
@endsection
