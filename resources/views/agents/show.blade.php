@extends("layout")
@section("title", $agent->nom)
@section("content")
@section("content")

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personne à Prevenir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
@if ($personeAprevenir != null)

            <p style=" font-size: 3ch;">Nom : {{ $personeAprevenir->nom }}</p>
            <p style=" font-size: 3ch;">Prenom : {{ $personeAprevenir->prenom }}</p>
            <p style=" font-size: 3ch;">Téléhone : {{ $personeAprevenir->tel }}</p>
            <p style=" font-size: 3ch;">Quartier : {{ $personeAprevenir->quartier }}</p>
            <p style=" font-size: 3ch;">profession : {{ $personeAprevenir->profession }}</p>
            @else

            @endif
            <div class="modal-footer">
                <input class="btn btn-info btn-block form-control" type="button" value="OK"  data-bs-dismiss="modal"  />
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5 container">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarCollapse ">
            <button type="button" class="btn btn-info btn-block me-6" data-bs-toggle="modal" data-bs-target="#myModal">Personne à prevenir</button>
            <a class="btn btn-primary btn-block text-uppercase me-6 text-uppercase "  style=" font-weight: bold" href="{{ route('agents.index') }}" >Retourner aux agent</a>
            <a href="{{ route('candidats.create') }}"  class="btn  btn-success text-uppercase me-6" style=" font-weight: bold; ">Enregistrer un agent</a>

            <form method="POST" name="recru" id="recru" action="{{ route('agents.destroy', $agent) }}" >
                <!-- CSRF token -->
                @csrf

                <!-- <input type="hidden" name="_method" value="DELETE"> -->
                @method("DELETE")
                <input class="btn btn-danger btn-block text-uppercase me-6" style=" font-weight: bold" type="submit" name="recru" id="recru" value="Retirer {{ $agent->nom.' '.$agent->prenom  }} des agents">
            </form>


          <!--a class="container fixed-center" href="" style="text-align: center; font-weight: bold; color:#FF5E0E; line-height: 50px;" id="comp-jd97w5lt3label">Candidatez-vous</a-->
          <!--a class="container fixed-left" href="#" style="text-align: left; color:#FF5E0E; font-weight: bold; line-height: 50px;" id="comp-jd97w5lt3label">Nos services</a-->

          </div>
        </div>
      </nav>
    </header><br><br><br><br>


<div class="container rounded-4  shadow-lg p-5 mb-5 bg-gray mt-10">
<div class="container p-10 mt-10">
    <div class="class row mt-10">
        <div class="class col-lg-4 bg-dark text-white text-center py-4">
            <div class="header-left">
                <img class="img-thumbnail rounded-circle mb-2" src="{{ asset('storage/'.$agent->avatar)}}"  >
                <h1 class="display-5">{{ $agent->nom.' '.$agent->prenom }}</h1>
                <h4 class="lead text-uppercase text-white-5 mb-4">{{ $agent->poste_agente }}</h4>
            </div>

            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Objectif</h5>
                <ul class="list text-white-50 text-ml-5 py-2 text-left text-capitalize">
                    <li class="list-item">
                        {{ $agent->objectif }}
                    </li>
                </ul>
            </div>

            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Informations personnel</h5>

                <ul class="list-unstyled text-white-50 ml-5 py-2 ">
                    <li class="list-item">
                    {{ 'Date naissance : '.$agent->date_naissance }}
                    </li>
                    <li class="list-item">
                        {{ 'Lieu naissance : '.$agent->lieu_naissance }}
                    </li>
                    <li class="list-item">
                        {{'Genre : '. $agent->genre}}
                    </li>

                    <li class="list-item">
                        {{'Nationalité : '. $agent->nationalite}}
                    </li>
                    <li class="list-item">
                        {{'Situation matrimoniale : '. $agent->situation_familiale}}
                    </li>
                    <li class="list-item">
                        {{'Nombre d\'enfants  : '. $agent->enfants_encharge}}
                    </li>
                    <li class="list-item">
                        {{'Profession actuelle  : '. $agent->profession}}
                    </li>
                    <li class="list-item">
                        {{'Horaire de travail sohaité  : '. $agent->horaire_travail_souhaite}}
                    </li>

                </ul>
            </div>

            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Adresse</h5>

                <ul class="list-unstyled text-white-50 ml-5 py-2">
                    <li class="list-item">
                        {{ 'Contatct : '.$agent->telephone }}
                        <i class="zmdi zmdi-smartphone-android"></i>
                    </li>
                    <li class="list-item">
                        {{'Email : '.$agent->email }}
                    </li>
                    <li class="list-item">
                        {{ 'Ville résidence : '.$agent->ville_residence }}
                    </li>
                    <li class="list-item">
                        {{ 'Quartier : '.$agent->quartier}}
                    </li>
                    <li class="list-item">
                        {{ 'Rue : '.$agent->rue }}
                    </li>
                </ul>
            </div>


        </div>
        <div class="col-lg-8 bg-light text-dark py-5 px-5">
            <div class="header-right">
                <h4 class="text-uppercase">Qualité personnel</h4>
                <hr>
                <p>{{ $agent->qualite_personnelles }}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Niveau d'étude</h4>
                <hr>
                <p>{{ $agent->niveau_etude}}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Savoir faire</h4>
                <hr>
                <p>{{ $agent->savoir_faire }}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Pretention salarial</h4>
                <hr>
                <p>{{ $agent->pretention_salarial }}</p>
            </div>
            @if ($experience != null)
            <div>
                <h4 class="text-uppercase">Expériences</h4>
                <hr>
                <ul class="list">
                    <li class="tist-item">
                        <h4 class="display-8 ">Nombre d'anneés d'expéprience</h4>
                        <h3 class="text-uppercase text-black-50">{{$experience->nbr_annee_experience.' '.'an(s)'}}</h3>

                        @if ($agent->poste_candidate == 'CHAUFFEUR')
                            <h4 class="display-8 ">Nombre de voiture conduit</h4>
                            <h3 class="text-uppercase text-black-50">{{$experience->nbr_voiture_conduit}}</h3>

                            <h4 class="display-8 ">Type de voiture conduit</h4>
                            <h3 class="text-uppercase text-black-50">{{$experience->type_voiture}}</h3>

                        @elseif ($agent->poste_candidate == 'NOUNOU')
                        <h4 class="display-8 ">Nombre d'enfants gardé: </h4>
                        <h3 class="text-uppercase text-black-50">{{$experience->nombre_enfants_garde}}</h3>


                        @endif

                        <h4 class="display-8 ">Nature contrat passé</h4>
                        <h3 class="text-uppercase text-black-50">{{$experience->type_contrat}}</h3>

                            <h4 class="display-8 ">Nom de l'employeur/société</h4>

                            <h3 class="text-uppercase text-black-50">{{$experience->nom_employeur}}</h3>

                        <h4 class="display-8 ">Contact de l'employeur/société</h4>
                        <h3 class="text-uppercase text-black-50">{{$experience->numero_employeur}}</h3>

                            <h4 class="display-8 ">Dernier salaire</h4>
                            <h3 class="text-uppercase text-black-50">{{$experience->dernier_salaire}}</h3>

                            <h4 class="display-8 ">Date de démission de son dernier emploi</h4>
                            <h3 class="text-uppercase text-black-50">{{$experience->date_demission}}</h3>

                    </li>
                    <li class="tist-item">
                    </li>
                </ul>
            </div>
            @else
                <div>
                    <h4 class="text-uppercase">Pas d'expériences</h4>
                </div>
                <hr>
            @endif
            <div class="header-right">
                <h4 class="text-uppercase">Nature contrat</h4>
                <hr>
                <p>{{ $agent->nature_contrat }}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Disponible à loger</h4>
                <hr>
                <p>{{ $agent->disponible_a_loger }}</p>
            </div>
        </div>

    </div>

</div>
</div>
@endsection
