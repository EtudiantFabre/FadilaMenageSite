@extends("layout")
@section("title", "Editer un contrat")
@section("content")

<div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
    @if (isset($contrat))

    <div class="container " style="text-color: white" id="title">
	    <h1 class="text-center">Modifier un contrat</h1>
    </div>
    @else
    <div class="container " style="text-color: white" id="title">
	    <h1 class="text-center">Enregistrer un contrat</h1>
    </div>
    @endif

	<!-- Si nous avons un  $contrat -->
	@if (isset($contrat))

	<!-- Le formulaire est géré par la route "contats.update" -->
	<form class="mb-10px" method="POST" action="{{ route('contrats.update', $contrat) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "contrats.store" -->
	<form class="mb-10px" method="POST" action="{{ route('contrats.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf

		<div class="form-group">
			<label for="agent">Agent :</label>
            <select name="id_agent">
                @foreach ($agents as $agent)
                    <option value="{{$agent['id_agent']}}">{{$agent['id_agent']}}  {{$agent['nom'].' '.$agent['prenom']}}</option>
                @endforeach
            </select>

			<!-- Le message d'erreur pour "agent" -->
			@error("agent")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="Client" >Client</label><br/>

            <select name="id_client">
                @foreach ($clients as $client)
                    <option value="{{$client['id_client']}}">{{$client['id_client']}}  {{$client['nom'].' '.$client['prenom']}}</option>
                @endforeach
            </select>

			<!-- Le message d'erreur pour "client" -->
			@error("client")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
       <div class="form-group">
			<label for="date_contrat" >Date de signature</label><br/>

			<input class="form-control" type="date" name="date_contrat" value="{{ isset($contrat->date_contrat) ? $contrat->date_contrat : old('date_contrat') }}"  id="date_contrat" placeholder="Date de signature" >

			<!-- Le message d'erreur pour "date_contrat" -->
			@error("date_contrat")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
       <div class="form-group">
			<label for="debut_contrat" >Début du contrat</label><br/>

			<input class="form-control" type="date" name="debut_contrat" value="{{ isset($contrat->debut_contrat) ? $contrat->debut_contrat : old('debut_contrat') }}"  id="debut_contrat" placeholder="Le debut du contrat" >

			<!-- Le message d'erreur pour "debut_contrat" -->
			@error("debut_contrat")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
       <div class="form-group">
			<label for="echeance_contrat" >Echeance du contrat</label><br/>

			<input class="form-control" type="text" name="echeance_contrat" value="{{ isset($contrat->echeance_contrat) ? $contrat->echeance_contrat : old('echeance_contrat') }}"  id="echeance_contrat" placeholder="Echéance contrat" >

			<!-- Le message d'erreur pour "echeance_contrat" -->
			@error("echeance_contrat")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
       <div class="form-group">
			<label for="service" >Service</label><br/>

			<input class="form-control" type="text" name="service" value="{{ isset($contrat->service) ? $contrat->service : old('service') }}"  id="service" placeholder="Le service" >

			<!-- Le message d'erreur pour "service" -->
			@error("service")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
       <div class="form-group">
			<label for="local" >Local</label><br/>

			<input class="form-control" type="text" name="local" value="{{ isset($contrat->local) ? $contrat->local : old('local') }}"  id="local" placeholder="local" >

			<!-- Le message d'erreur pour "local" -->
			@error("local")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>

       <div class="form-group">
			<label for="temps" >Temps</label><br/>

			<input class="form-control" type="text" name="temps" value="{{ isset($contrat->temps) ? $contrat->temps : old('temps') }}"  id="temps" placeholder="Temps" >

			<!-- Le message d'erreur pour "service" -->
			@error("temps")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
       <div class="form-group">
			<label for="frequence" >Frequence</label><br/>

			<input class="form-control" type="number" name="frequence" value="{{ isset($contrat->frequence) ? $contrat->frequence : old('frequence') }}"  id="frequence" placeholder="Frequence" >

			<!-- Le message d'erreur pour "frequence" -->
			@error("frequence")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>

       <div class="form-group">
			<label for="salaire" >Salaire</label><br/>

			<input class="form-control" type="number" name="salaire" value="{{ isset($contrat->salaire) ? $contrat->salaire : old('salaire') }}"  id="salaire" placeholder="Le salaire" >

			<!-- Le message d'erreur pour "salaire" -->
			@error("salaire")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div>
       <div class="form-group">
			<label for="status" >Status</label><br/>

			<input class="form-control" type="text" name="status" value="{{ isset($contrat->status) ? $contrat->status : old('status') }}"  id="status" placeholder="Contrat encours ?" >

			<!-- Le message d'erreur pour "status" -->
			@error("status")
			<div class="form-group">{{ $message }}</div>
			@enderror
		</div><br> <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">

        <button type="submit" class="btn btn-success btn-block form-control">ENREGISTREZ</button>
        </div>
	</form>
</div>

@endsection
