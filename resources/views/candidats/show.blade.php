@extends("layout")
@section("title", $candidat->nom)
@section("content")
<div class="container rounded-4  shadow-lg p-3 mb-5 bg-div">

<div class="container p-5">
    <div class="class row">
        <div class="class col-lg-4 bg-dark text-white text-center py-4">
            <div class="header-left">
                <img class="img-thumbnail rounded-circle mb-2" src="{{ asset('storage/'.$candidat->avatar)}}"  >
                <h1 class="display-5">{{ $candidat->nom.' '.$candidat->prenom }}</h1>
                <h4 class="lead text-uppercase text-white-5 mb-4">{{ $candidat->poste_candidate }}</h4>
            </div>

            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Informations personnel</h5>

                <ul class="list-unstyled text-white-50 ml-5 py-2 ">
                    <li class="list-item">
                    {{ 'Date naissance : '.$candidat->date_naissance }}
                    </li>
                    <li class="list-item">
                        {{ 'Lieu naissance : '.$candidat->lieu_naissance }}
                    </li>
                    <li class="list-item">
                        {{'Genre : '. $candidat->genre}}
                    </li>

                    <li class="list-item">
                        {{'Nationalité : '. $candidat->nationalite}}
                    </li>
                    <li class="list-item">
                        {{'Situation matrimoniale : '. $candidat->situation_familiale}}
                    </li>
                    <li class="list-item">
                        {{'Nombre d\'enfants  : '. $candidat->enfants_encharge}}
                    </li>
                    <li class="list-item">
                        {{'Profession actuelle  : '. $candidat->profession}}
                    </li>
                    <li class="list-item">
                        {{'Horaire de travail sohaité  : '. $candidat->horaire_travail_souhaite}}
                    </li>

                </ul>
            </div>


            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Adresse</h5>

                <ul class="list-unstyled text-white-50 ml-5 py-2">
                    <li class="list-item">
                        {{ 'Contatct : '.$candidat->telephone }}
                    </li>
                    <li class="list-item">
                        {{'Email : '.$candidat->email }}
                    </li>
                    <li class="list-item">
                        {{ 'Ville résidence : '.$candidat->ville_residence }}
                    </li>
                    <li class="list-item">
                        {{ 'Quartier : '.$candidat->quartier}}
                    </li>
                    <li class="list-item">
                        {{ 'Rue : '.$candidat->rue }}
                    </li>
                </ul>
            </div>

            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Objectif</h5>
                <ul class="list text-white-50 text-ml-5 py-2 text-left text-capitalize">
                    <li class="list-item">
                        {{ $candidat->objectif }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8 bg-light text-dark py-5 px-5">
            <div class="header-right">
                <h4 class="text-uppercase">Qualité personnel</h4>
                <hr>
                <p>{{ $candidat->qualite_personnelles }}</p>
            </div>

            <div>
                <h4 class="text-uppercase">Expériences</h4>
                <hr>
                <ul class="list">
                    <li class="tist-item">
                        <h5 class="display-6 text-uppercase">online media marketing</h5>
                        <h6 class="text-uppercase text-black-50">company name / 2020-present</h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem nobis consequatur commodi consectetur iste, suscipit natus minima eum! Qui repudiandae tempore ducimus incidunt quaerat minima sapiente sint dolore magnam expedita molestiae, aliquam inventore cupiditate at voluptatem? Esse optio ea velit voluptatum repudiandae labore repellat, consequuntur id harum excepturi, vitae pariatur?</p>
                    </li>
                    <li class="tist-item">
                        <h5 class="display-6 text-uppercase">online media marketing</h5>
                        <h6 class="text-uppercase text-black-50">company name / 2020-present</h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem nobis consequatur commodi consectetur iste, suscipit natus minima eum! Qui repudiandae tempore ducimus incidunt quaerat minima sapiente sint dolore magnam expedita molestiae, aliquam inventore cupiditate at voluptatem? Esse optio ea velit voluptatum repudiandae labore repellat, consequuntur id harum excepturi, vitae pariatur?</p>
                    </li>
                </ul>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Savoir faire</h4>
                <hr>
                <p>{{ $candidat->savoir_faire }}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Nature contrat</h4>
                <hr>
                <p>{{ $candidat->nature_contrat }}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Disponible à loger</h4>
                <hr>
                <p>{{ $candidat->disponible_a_loger }}</p>
            </div>
        </div>

    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary float-end" href="{{ route('candidats.index') }}" title="Retourner aux candidat" >Retourner aux candidat</a>

        <form method="POST" name="recru" id="recru" action="{{ route('candidats.destroy', $candidat) }}" >
            <!-- CSRF token -->
            @csrf

            <!-- <input type="hidden" name="_method" value="DELETE"> -->
            @method("DELETE")
            <input class="btn btn-success btn-block" type="submit" name="recru" id="recru" value="Recruter {{ $candidat->nom.' '.$candidat->prenom  }}" >
        </form>
        </div>
</div>
</div>
@endsection

