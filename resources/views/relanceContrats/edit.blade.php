@extends("layout")
@section("title", "Relancer un contrat")
@section("content")

	<h1>Relancer un contrat</h1>

	<!-- Si nous avons un relanceContrat $relanceContrat -->
	@if (isset($relanceContrat))

        <!-- Le formulaire est géré par la route "relanceContrat.update" -->
        <form method="POST" action="{{ route('relanceContrats.update', $relanceContrat) }}" enctype="multipart/form-data" >

            <!-- <input type="hidden" name="_method" value="PUT"> -->
            @method('PUT')

	@else

        <!-- Le formulaire est géré par la route "relanceContrats.store" -->
        <form method="POST" action="{{ route('relanceContrats.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="contrat" >Contrat à rélancer : </label>
            <select name="contrat">
                @foreach ($contrats as $contrat)
                    <option value="{{$contrat['id_contrat']}}">{{$contrat['id_contrat']}}  {{$contrat->agent['nom'].' '.$contrat->agent['prenom']}}</option>
                @endforeach
            </select>
			<!-- Le message d'erreur pour "contrat" -->
			@error("contrat")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="date_relance" >Date de telance : </label>

			<input type="date" name="date_relance" value="{{ isset($relanceContrat->date_relance) ? $relanceContrat->date_relance : old('date_relance') }}"  id="date_relance">

			<!-- Le message d'erreur pour "date_relance" -->
			@error("date_relance")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="client" >Client</label><br/>

            <select name="client">
                @foreach ($clients as $client)
                    <option value="{{$client['id_client']}}">{{$client['id_client']}}  {{$client['nom']}}</option>
                @endforeach
            </select>
			<!-- Le message d'erreur pour "client" -->
			@error("client")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="motif" >Motif : </label>

            <textarea name="motif" id="motif" value="{{ isset($relanceContrat->motif) ? $relanceContrat->motif : old('motif') }}" cols="30" rows="10" placeholder="motif"></textarea>
			<!-- Le message d'erreur pour "motif" -->
			@error("motif")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="situation" >Situation : </label>

			<input type="text" name="situation" value="{{ isset($relanceContrat->situation) ? $relanceContrat->situation : old('situation') }}"  id="situation" placeholder="situation" >

			<!-- Le message d'erreur pour "situation" -->
			@error("situation")
			<div>{{ $message }}</div>
			@enderror
		</p>
        <p>
			<label for="nbr_contrat_encours" >Nombre de contrat en cours : </label>

			<input type="number" name="nbr_contrat_encours" value="{{ isset($relanceContrat->nbr_contrat_encours) ? $relanceContrat->nbr_contrat_encours : old('nbr_contrat_encours') }}"  id="nbr_contrat_encours">

			<!-- Le message d'erreur pour "nbr_contrat_encours" -->
			@error("nbr_contrat_encours")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
