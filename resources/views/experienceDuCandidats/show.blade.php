@extends("layout")
@section("title", "Expérience")
@section("content")

	<h1>{{'Experience de monsieur : '. $experienceDuCandidat->candidat}}</h1>
    <!--img src="" alt="Photo du experienceDuCandidats" style="max-width: 300px;"-->

        <p>
            <label for="numero">Numero :</label> {{$experienceDuCandidat->id_experienceDuCandidats}}
        </p>
        <p>
            <label for="numero">Candidat :</label> {{$experienceDuCandidat->candidat}}
        </p>
        <p>
            <label for="numero">Nombre d'années d'expérience : </label> {{$experienceDuCandidat->nbr_annee_experience}}
        </p>
        <p>
            <label for="numero">Nombre de voiture conduit : </label> {{$experienceDuCandidat->nbr_voiture_conduit}}
        </p>
        <p>
            <label for="numero">Type de voiture conduit :</label> {{$experienceDuCandidat->type_voiture}}
        </p>
        <p>
            <label for="numero">Type de contrat :</label> {{$experienceDuCandidat->type_contrat}}
        </p>
        <p>
            <label for="numero">Adresse société : </label> {{$experienceDuCandidat->adresse_societe}}
        </p>
        <p>
            <label for="numero">Adresse employeur :  </label> {{$experienceDuCandidat->adresse_employeur}}
        </p>
        <p>
            <label for="numero">Dernier salaire :</label> {{$experienceDuCandidat->dernier_salaire}}
        </p>
        <p>
            <label for="numero">Date de démission :</label> {{$experienceDuCandidat->date_demission}}
        </p>
        <p>
            <label for="numero">Pretention salarial :</label> {{$experienceDuCandidat->pretention_salarial}}
        </p>

	<p><a href="{{ route('experienceDuCandidats.index') }}" title="Retourner aux experienceDuCandidats" >Retourner aux expériences</a></p>

    <form method="POST" name="recru" id="recru" action="{{ route('experienceDuCandidats.destroy', $experienceDuCandidat) }}" >
        <!-- CSRF token -->
        @csrf

        <!-- <input type="hidden" name="_method" value="DELETE"> -->
        @method("DELETE")
        <input type="submit" name="delete"  value="Suprimmer" >
    </form>

@endsection
