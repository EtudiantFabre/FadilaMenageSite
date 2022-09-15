
@extends('layout')

@section('title', "Sélection d'un agent ")

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
    
    <style>
        .fullscreen {
            margin: 0;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }
    </style>

    <div class="text-center">
        <h1>SÉLECTIONNER UN DES AGENTS</h1>
    </div>

    <div class="container" onload="continue">
        @if (isset($clients))
            @foreach ($clients as $unClt)
                <label for="">CLIENT N°<strong>{{$unClt->id_client}}</strong></label>
                <div class="row row-cols-1 row-cols-md-2 g-4 container">
                    @foreach ($agents as $agt)
                        <div class="col">
                            <div class="card mb-3" style="background: rgb(241, 153, 80)">
                                <form action="{{route('prosClient')}}" method="post">
                                    @csrf
                                    <div class="row g-0">
                                        <div class="col-md-4 align-self-center d-flex justify-content-center">
                                            <img src="/toutfadila2.jpg" class="img-fluid rounded-circle" alt="...">
                                        </div>
                                        <div class="card-body col-md-8 text-center">
                                            <input class="text-uppercase form-control fs-1" type="text" value="{{$agt->nom}}" name="textdefabre" disabled>
                                            <input type="hidden" value="{{$agt->id_agent}}" name="id_agent"> 
                                            <input type="hidden" value="{{$unClt->id_client}}" name="id_client">                               
                                            <p class="card-text"><strong>Genre :</strong> {{$agt->genre}}</p>
                                            <p class="card-text"><strong>Prétention salariale :</strong> {{$agt->pretention_salarial}} FCFA</p>
                                            <p class="card-text"><strong>Ville de residence :</strong> {{$agt->ville_residence}}</p>
                                            <p class="card-text"><strong>Quartier :</strong> {{$agt->quartier}}</p>
                                        </div>

                                        <div class="card-footer mx-auto d-flex justify-content-center">
                                            <div>
                                                <button class="btn btn-danger">SÉLECTIONNER</button>
                                                <!--a href="{{--route('agents.show', $agt)--}}"></a-->
                                                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">VOIR PLUS</button>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">#Information de l'agent {{strtoupper($agt->nom)}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="container rounded-4  shadow-lg p-3 mb-5 bg-div">

                                                            <div class="container p-5">
                                                                <div class="class row">
                                                                    <div class="class col-lg-4 bg-dark text-white text-center py-4">
                                                                        <div class="header-left">
                                                                            <img class="img-thumbnail rounded-circle mb-2" src="{{ asset('storage/'.$agt->avatar)}}" alt="{{strtoupper($agt->nom)}}" >
                                                                            <h1 class="display-5">{{ $agt->nom.' '.$agt->prenom }}</h1>
                                                                            <h4 class="lead text-uppercase text-white-5 mb-4">{{ $agt->poste_candidate }}</h4>
                                                                        </div>
                                                            
                                                                        <div>
                                                                            <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Informations personnel</h5>
                                                            
                                                                            <ul class="list-unstyled text-white-50 ml-5 py-2 ">
                                                                                <li class="list-item">
                                                                                {{ 'Date naissance : '.$agt->date_naissance }}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{ 'Lieu naissance : '.$agt->lieu_naissance }}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{'Genre : '. $agt->genre}}
                                                                                </li>
                                                            
                                                                                <li class="list-item">
                                                                                    {{'Nationalité : '. $agt->nationalite}}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{'Situation matrimoniale : '. $agt->situation_familiale}}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{'Nombre d\'enfants  : '. $agt->enfants_encharge}}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{'Profession actuelle  : '. $agt->profession}}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{'Horaire de travail sohaité  : '. $agt->horaire_travail_souhaite}}
                                                                                </li>
                                                            
                                                                            </ul>
                                                                        </div>
                                                            
                                                            
                                                                        <div>
                                                                            <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Adresse</h5>
                                                            
                                                                            <ul class="list-unstyled text-white-50 ml-5 py-2">
                                                                                <li class="list-item">
                                                                                    {{ 'Contatct : '.$agt->telephone }}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{'Email : '.$agt->email }}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{ 'Ville résidence : '.$agt->ville_residence }}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{ 'Quartier : '.$agt->quartier}}
                                                                                </li>
                                                                                <li class="list-item">
                                                                                    {{ 'Rue : '.$agt->rue }}
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                            
                                                                        <div>
                                                                            <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Objectif</h5>
                                                                            <ul class="list text-white-50 text-ml-5 py-2 text-left text-capitalize">
                                                                                <li class="list-item">
                                                                                    {{ $agt->objectif }}
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-8 bg-light text-dark py-5 px-5">
                                                                        <div class="header-right">
                                                                            <h4 class="text-uppercase">Qualité personnel</h4>
                                                                            <hr>
                                                                            <p>{{ $agt->qualite_personnelles }}</p>
                                                                        </div>
                                                            
                                                                        <div>
                                                                            <h4 class="text-uppercase">Expériences</h4>
                                                                            <hr>
                                                                            <!--ul class="list">
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
                                                                            </ul-->
                                                                        </div>
                                                                        <div class="header-right">
                                                                            <h4 class="text-uppercase">Savoir faire</h4>
                                                                            <hr>
                                                                            <p>{{ $agt->savoir_faire }}</p>
                                                                        </div>
                                                                        <div class="header-right">
                                                                            <h4 class="text-uppercase">Nature contrat</h4>
                                                                            <hr>
                                                                            <p>{{ $agt->nature_contrat }}</p>
                                                                        </div>
                                                                        <div class="header-right">
                                                                            <h4 class="text-uppercase">Disponible à loger</h4>
                                                                            <hr>
                                                                            <p>{{ $agt->disponible_a_loger }}</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vue</button>
                                                                            <!--button type="button" class="btn btn-primary">Save changes</button-->
                                                                        </div>
                                                                    </div>
                                                            
                                                                </div>
                                                                
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        @else
            <label for="">CLIENT N°<strong>{{$client->id_client}}</strong></label>
            <div class="row row-cols-1 row-cols-md-2 g-4 container">
                @foreach ($agents as $agt)
                    <div class="col">
                        <div class="card">
                            <form action="{{route('prosClient')}}" method="post">
                                @csrf
                                
                                <div class="col-md-4 align-self-center d-flex justify-content-center">
                                    <img src="/toutfadila2.jpg" class="img-fluid rounded-circle" alt="...">
                                </div>
                                
                                <div class="card-body">
                                    <input class="text-uppercase form-control fs-1" type="text" value="{{$agt->id_agent.' '.$agt->nom}}" name="textdefabre" disabled>
                                    <input type="hidden" value="{{$agt->id_agent}}" name="id_agent"> 
                                    <input type="hidden" value="{{$client->id_client}}" name="id_client">                               
                                    <p class="card-text"><strong>Genre :</strong> {{$agt->genre}}</p>
                                    <p class="card-text"><strong>Nationalité :</strong> {{$agt->nationalite}}</p>
                                    <p class="card-text"><strong>Ville de residence :</strong> {{$agt->ville_residence}}</p>
                                    <p class="card-text"><strong>Quartier :</strong> {{$agt->quartier}}</p>
                                </div>

                                <div class="card-footer mx-auto d-flex justify-content-center">
                                    <div>
                                        <button class="btn btn-danger">SÉLECTIONNER</button>
                                        <!--a href="{{--route('agents.show', $agt)--}}"></a-->
                                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">VOIR PLUS</button>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">#Information de l'agent {{strtoupper($agt->nom)}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="container rounded-4  shadow-lg p-3 mb-5 bg-div">

                                                    <div class="container p-5">
                                                        <div class="class row">
                                                            <div class="class col-lg-4 bg-dark text-white text-center py-4">
                                                                <div class="header-left">
                                                                    <img class="img-thumbnail rounded-circle mb-2" src="{{ asset('storage/'.$agt->avatar)}}" alt="{{strtoupper($agt->nom)}}" >
                                                                    <h1 class="display-5">{{ $agt->nom.' '.$agt->prenom }}</h1>
                                                                    <h4 class="lead text-uppercase text-white-5 mb-4">{{ $agt->poste_candidate }}</h4>
                                                                </div>
                                                    
                                                                <div>
                                                                    <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Informations personnel</h5>
                                                    
                                                                    <ul class="list-unstyled text-white-50 ml-5 py-2 ">
                                                                        <li class="list-item">
                                                                        {{ 'Date naissance : '.$agt->date_naissance }}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{ 'Lieu naissance : '.$agt->lieu_naissance }}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{'Genre : '. $agt->genre}}
                                                                        </li>
                                                    
                                                                        <li class="list-item">
                                                                            {{'Nationalité : '. $agt->nationalite}}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{'Situation matrimoniale : '. $agt->situation_familiale}}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{'Nombre d\'enfants  : '. $agt->enfants_encharge}}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{'Profession actuelle  : '. $agt->profession}}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{'Horaire de travail sohaité  : '. $agt->horaire_travail_souhaite}}
                                                                        </li>
                                                    
                                                                    </ul>
                                                                </div>
                                                    
                                                    
                                                                <div>
                                                                    <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Adresse</h5>
                                                    
                                                                    <ul class="list-unstyled text-white-50 ml-5 py-2">
                                                                        <li class="list-item">
                                                                            {{ 'Contatct : '.$agt->telephone }}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{'Email : '.$agt->email }}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{ 'Ville résidence : '.$agt->ville_residence }}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{ 'Quartier : '.$agt->quartier}}
                                                                        </li>
                                                                        <li class="list-item">
                                                                            {{ 'Rue : '.$agt->rue }}
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                    
                                                                <div>
                                                                    <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Objectif</h5>
                                                                    <ul class="list text-white-50 text-ml-5 py-2 text-left text-capitalize">
                                                                        <li class="list-item">
                                                                            {{ $agt->objectif }}
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 bg-light text-dark py-5 px-5">
                                                                <div class="header-right">
                                                                    <h4 class="text-uppercase">Qualité personnel</h4>
                                                                    <hr>
                                                                    <p>{{ $agt->qualite_personnelles }}</p>
                                                                </div>
                                                    
                                                                <div>
                                                                    <h4 class="text-uppercase">Expériences</h4>
                                                                    <hr>
                                                                    <!--ul class="list">
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
                                                                    </ul-->
                                                                </div>
                                                                <div class="header-right">
                                                                    <h4 class="text-uppercase">Savoir faire</h4>
                                                                    <hr>
                                                                    <p>{{ $agt->savoir_faire }}</p>
                                                                </div>
                                                                <div class="header-right">
                                                                    <h4 class="text-uppercase">Nature contrat</h4>
                                                                    <hr>
                                                                    <p>{{ $agt->nature_contrat }}</p>
                                                                </div>
                                                                <div class="header-right">
                                                                    <h4 class="text-uppercase">Disponible à loger</h4>
                                                                    <hr>
                                                                    <p>{{ $agt->disponible_a_loger }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vue</button>
                                                                    <!--button type="button" class="btn btn-primary">Save changes</button-->
                                                                </div>
                                                            </div>
                                                    
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
            
    </div>


</body>
</html>
@endsection
