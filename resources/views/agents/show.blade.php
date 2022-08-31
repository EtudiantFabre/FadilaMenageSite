@extends("layout")
@section("title", $agent->nom)
@section("content")

	<h1>{{ $agent->nom." ".$agent->prenom}}</h1>

	<img src="{{ asset('storage/app/agents'.$agent->avatar) }}" alt="Photo d'agent" style="max-width: 300px;">

	<p>
        <label for="numero">Numero :</label> {{$agent->id_agent }}
    </p>
    <p>
        <label for="numero">Date naissance : </label> {{$agent->date_naissance}}
    </p>
    <p>
        <label for="numero">Lieu de naissance : </label> {{$agent->lieu_naissance}}
    </p>
    <p>
        <label for="numero">Genre :</label> {{$agent->genre}}
    </p>
    <p>
        <label for="numero">Nationalité :</label> {{$agent->nationalite}}
    </p>
    <p>
        <label for="numero">Pièce d'identité : </label> {{$agent->piece_identite}}
    </p>
    <p>
        <label for="numero">Date de delivrance :  </label> {{$agent->date_delivrer}}
    </p>
    <p>
        <label for="numero">Date d'expiration :</label> {{$agent->date_expiration}}
    </p>
    <p>
        <label for="numero">Ville résidence :</label> {{$agent->ville_residence}}
    </p>
    <p>
        <label for="numero">Quartier :</label> {{$agent->quartier}}
    </p>
    <p>
        <label for="numero">Rue :</label> {{$agent->rue}}
    </p>
    <p>
        <label for="numero">Email :</label> {{$agent->email}}
    </p>
    <p>
        <label for="numero">Situation de famille :</label> {{$agent->situation_familiale}}
    </p>
    <p>
        <label for="numero">Nombre d'enfent en charge :</label> {{$agent->enfants_encharge}}
    </p>
    <p>
        <label for="numero">Profession :</label> {{$agent->profession}}
    </p>
    <p>
        <label for="numero">Numero de telphone :</label> {{$agent->telephone}}
    </p>
    <p>
        <label for="numero">Poste agenté :</label> {{$agent->poste_agente}}
    </p>
    <p>
        <label for="numero">Heure de travail souhaité :</label> {{$agent->horaire_travail_souhaite}}
    </p>
    <p>
        <label for="numero">Objectif :</label> {{$agent->objectif}}
    </p>
    <p>
        <label for="numero">Qualités personnelles :</label> {{$agent->qualite_personnelles}}
    </p>
    <p>
        <label for="numero">Savoir faire :</label> {{$agent->savoir_faire}}
    </p>
    <p>
        <label for="numero">Disponibilité à loger :</label> {{$agent->disponible_a_loger}}
    </p>
    <p>
        <label for="numero">Nature contrat : </label> {{$agent->nature_contrat}}
    </p>
    <p>
        <label for="numero">Heure du travail passé : </label> {{$agent->oraire_travail_passe }}
    </p>
    <p>
        <label for="numero">Disponibilité : </label> {{$agent->status}}
    </p>
    <p>
        <label for="numero">Date retenu : </label> {{$agent->date_retenu }}
    </p>
    <p>
        <label for="numero">Heure du travail passé : </label> {{$agent->oraire_travail_passe }}
    </p>




<p><a href="{{ route('agents.index') }}" title="Retourner aux agent" >Retourner aux agents</a></p>

<form method="POST" name="recru" id="recru" action="{{ route('agents.destroy', $agent) }}" >
    <!-- CSRF token -->
    @csrf

    <!-- <input type="hidden" name="_method" value="DELETE"> -->
    @method("DELETE")
    <input type="submit" name="recru" id="recru" value="{{ $agent->nom.' '.$agent->prenom  }}" >
</form>


	<p><a href="{{ route('agents.index') }}" title="Retourner aux agents" >Retourner aux agents</a></p>

@endsection
