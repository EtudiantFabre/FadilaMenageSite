@extends("layout")
@section("title", "Editer un contrat")
@section("content")
<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
    @if (isset($vente))

    <div class="container " style="text-color: white" id="title">
	    <h1 class="text-center">Modifiere la vente du mois</h1>
    </div>
    @else
    <div class="container " style="text-color: white" id="title">
	    <h1 class="text-center">Enregistrez la vente du mois</h1>
    </div>
    @endif
	<!-- Si nous avons une vente $vente -->
	@if (isset($vente))

	<!-- Le formulaire est géré par la route "vente.update" -->
	<form class="mb-10px" method="POST" action="{{ route('ventes.update', $vente) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "ventes.store" -->
	<form class="mb-10px" method="POST" action="{{ route('ventes.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<div class="form-group">
			<label for="personnel" >Personnel</label><br/>

            <select name="personnel">
                @foreach ($personnels as $personnel)
                    <option value="{{$personnel['id_personnel']}}">{{$personnel['id_personnel']}}  {{$personnel['nom'].' '.$personnel['prenom']}}</option>
                @endforeach
            </select>
			<!-- Le message d'erreur pour "personnel" -->
			@error("personnel")
			<div>{{ $message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="mois" >Vente du mois</label><br/>

			<input class="form-control" type="month" name="mois" value="{{ isset($vente->mois) ? $vente->mois : old('mois') }}"  id="mois" placeholder="Le mois" >

			<!-- Le message d'erreur pour "mois" -->
			@error("mois")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="contrat_permanent" >Contrat permanent</label><br/>

			<input class="form-control" type="number" name="contrat_permanent" value="{{ isset($vente->contrat_permanent) ? $vente->contrat_permanent : old('contrat_permanent') }}"  id="contrat_permanent" placeholder="Nombre de contrat en cours" >

			<!-- Le message d'erreur pour "contrat_permanent" -->
			@error("contrat_permanent")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="contrat_permanent_perdus" >Contrat permanent perdu</label><br/>

			<input class="form-control" type="number" name="contrat_permanent_perdus" value="{{ isset($vente->contrat_permanent_perdus) ? $vente->contrat_permanent_perdus : old('contrat_permanent_perdus') }}"  id="contrat_permanent_perdus" placeholder="Nombre de contrat perdu" >

			<!-- Le message d'erreur pour "contrat_permanent_perdus" -->
			@error("contrat_permanent_perdus")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="contrat_gagne" >Contrats gagné</label><br/>

			<input class="form-control" type="number" name="contrat_gagne" value="{{ isset($vente->contrat_gagne) ? $vente->contrat_gagne : old('contrat_gagne') }}"  id="contrat_gagne" placeholder="Nombre de contrat gagner" >

			<!-- Le message d'erreur pour "contrat_gagne" -->
			@error("contrat_gagne")
			<div>{{ $message }}</div>
			@enderror
		</div>

        <div class="form-group">
			<label for="contrat_ponctuel" >Contrat ponctuel</label><br/>

			<input class="form-control" type="number" name="contrat_ponctuel" value="{{ isset($vente->contrat_ponctuel) ? $vente->contrat_ponctuel : old('contrat_ponctuel') }}"  id="contrat_ponctuel" placeholder="Contrat ponctuel" >

			<!-- Le message d'erreur pour "contrat_ponctuel" -->
			@error("contrat_ponctuel")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="marche_public" >Marché public</label><br/>

			<input class="form-control" type="text" name="marche_public" value="{{ isset($vente->marche_public) ? $vente->marche_public : old('marche_public') }}"  id="marche_public" placeholder="Marché public" >

			<!-- Le message d'erreur pour "marche_public" -->
			@error("marche_public")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="commentaire" >Commentare</label><br/>

			<textarea class="form-control" type="text" name="commentaire" value="{{ isset($vente->commentaire) ? $vente->commentaire : old('commentaire') }}"  id="commentaire" placeholder="Commentaire" ></textarea>

			<!-- Le message d'erreur pour "commentaire" -->
			@error("commentaire")
			<div>{{ $message }}</div>
			@enderror
		</div>
        <div class="form-group">
			<label for="total_client_findu_mois" >Total client</label><br/>

			<input class="form-control" type="number" name="total_client_findu_mois" value="{{ isset($vente->total_client_findu_mois) ? $vente->total_client_findu_mois : old('total_client_findu_mois') }}"  id="total_client_findu_mois" placeholder="total clients à la fin du mois" >

			<!-- Le message d'erreur pour "total_client_findu_mois" -->
			@error("total_client_findu_mois")
			<div>{{ $message }}</div>
			@enderror
		</div><br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-success btn-block form-control">ENREGISTREZ</button>
        </div>

	</form>
</div>

@endsection
