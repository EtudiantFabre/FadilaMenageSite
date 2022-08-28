@extends("layouts")
@section("title", $agent->nom)
@section("content")

	<h1>{{ $agent->nom." ".$agent->prenom}}</h1>

	<img src="{{ asset('storage/app/candidats'.$agent->avatar) }}" alt="Photo d'agent" style="max-width: 300px;">

	<p>
        <label for="numero">Numero :</label> {{$candidat->id_candidat }}
    </p>
    <p>
        <label for="numero">Date naissance : </label> {{$candidat->date_naissance}}
    </p>
    <p>
        <label for="numero">Lieu de naissance : </label> {{$candidat->lieu_naissance}}
    </p>
    <p>
        <label for="numero">Genre :</label> {{$candidat->genre}}
    </p>
    <p>
        <label for="numero">Nationalité :</label> {{$candidat->nationalite}}
    </p>
    <p>
        <label for="numero">Pièce d'identité : </label> {{$candidat->piece_identite}}
    </p>
    <p>
        <label for="numero">Date de delivrance :  </label> {{$candidat->date_delivrer}}
    </p>
    <p>
        <label for="numero">Date d'expiration :</label> {{$candidat->date_expiration}}
    </p>
    <p>
        <label for="numero">Ville résidence :</label> {{$candidat->ville_residence}}
    </p>
    <p>
        <label for="numero">Quartier :</label> {{$candidat->quartier}}
    </p>
    <p>
        <label for="numero">Rue :</label> {{$candidat->rue}}
    </p>
    <p>
        <label for="numero">Email :</label> {{$candidat->email}}
    </p>
    <p>
        <label for="numero">Situation de famille :</label> {{$candidat->situation_familiale}}
    </p>
    <p>
        <label for="numero">Nombre d'enfent en charge :</label> {{$candidat->enfants_encharge}}
    </p>
    <p>
        <label for="numero">Profession :</label> {{$candidat->profession}}
    </p>
    <p>
        <label for="numero">Numero de telphone :</label> {{$candidat->telephone}}
    </p>
    <p>
        <label for="numero">Poste candidaté :</label> {{$candidat->poste_candidate}}
    </p>
    <p>
        <label for="numero">Heure de travail souhaité :</label> {{$candidat->horaire_travail_souhaite}}
    </p>
    <p>
        <label for="numero">Objectif :</label> {{$candidat->objectif}}
    </p>
    <p>
        <label for="numero">Qualités personnelles :</label> {{$candidat->qualite_personnelles}}
    </p>
    <p>
        <label for="numero">Savoir faire :</label> {{$candidat->savoir_faire}}
    </p>
    <p>
        <label for="numero">Disponibilité à loger :</label> {{$candidat->disponible_a_loger}}
    </p>
    <p>
        <label for="numero">Nature contrat : </label> {{$candidat->nature_contrat}}
    </p>
    <p>
        <label for="numero">Heure du travail passé : </label> {{$candidat->oraire_travail_passe }}
    </p>




<p><a href="{{ route('candidats.index') }}" title="Retourner aux candidat" >Retourner aux candidat</a></p>

<form method="POST" name="recru" id="recru" action="{{ route('candidats.destroy', $candidat) }}" >
    <!-- CSRF token -->
    @csrf

    <!-- <input type="hidden" name="_method" value="DELETE"> -->
    @method("DELETE")
    <input type="submit" name="recru" id="recru" value="Recruter {{ $candidat->nom.' '.$candidat->prenom  }}" >
</form>


	<p><a href="{{ route('agent.index') }}" title="Retourner aux agents" >Retourner aux agents</a></p>

@endsection
