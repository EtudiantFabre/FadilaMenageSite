@extends("layout")
@section("title", $personnel->nom)
@section("content")

	<h1>{{'Monsieur : '. $personnel->nom.' '.$personnel->prenom }}</h1>
    <img src="{{ asset('storage'.$personnel->avatar)}}" alt="Photo du personnel" style="max-width: 300px;">

        <p>
            <label for="numero">Numero :</label> {{$personnel->id_personnel }}
        </p>
        <p>
            <label for="numero">Date naissance : </label> {{$personnel->date_naissance}}
        </p>
        <p>
            <label for="numero">Lieu de naissance : </label> {{$personnel->lieu_naissance}}
        </p>
        <p>
            <label for="numero">Genre :</label> {{$personnel->genre}}
        </p>
        <p>
            <label for="numero">Nationalité :</label> {{$personnel->nationalite}}
        </p>
        <p>
            <label for="numero">Pièce d'identité : </label> {{$personnel->piece_identite}}
        </p>
        <p>
            <label for="numero">Numero de pièce : </label> {{$personnel->numero_de_piece}}
        </p>
        <p>
            <label for="numero">Date de delivrance :  </label> {{$personnel->date_delivrer}}
        </p>
        <p>
            <label for="numero">Date d'expiration :</label> {{$personnel->date_expiration}}
        </p>
        <p>
            <label for="numero">Ville résidence :</label> {{$personnel->ville_residence}}
        </p>
        <p>
            <label for="numero">Quartier :</label> {{$personnel->quartier}}
        </p>
        <p>
            <label for="numero">Rue :</label> {{$personnel->rue}}
        </p>
        <p>
            <label for="numero">Email :</label> {{$personnel->email}}
        </p>
        <p>
            <label for="numero">Situation de famille :</label> {{$personnel->situation_familiale}}
        </p>
        <p>
            <label for="numero">Nombre d'enfent en charge :</label> {{$personnel->enfants_encharge}}
        </p>
        <p>
            <label for="numero">Profession :</label> {{$personnel->profession}}
        </p>
        <p>
            <label for="numero">Numero de telphone :</label> {{$personnel->telephone}}
        </p>
        <p>
            <label for="numero">Poste Occuper :</label> {{$personnel->post_ocuper}}
        </p>
        <p>
            <label for="numero">Nature du contrat :</label> {{$personnel->nature_contrat}}
        </p>

	<p><a href="{{ route('personnels.index') }}" title="Retourner aux personnel" >Retourner aux personnel</a></p>

@endsection
