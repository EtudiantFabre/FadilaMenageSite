@extends('layout')

@section('title', "Sélection d'un agent ")

@section('content')

<div class="text-center">
    <h1>SÉLECTIONNER UN DES AGENTS</h1>
</div>

<div>
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
                                    <div class="col-md-4">
                                        <img src="/toutfadila2.jpg" class="img-fluid rounded-circle" alt="...">
                                    </div>
                                    <div class="card-body col-md-8">
                                        <input class="text-uppercase form-control fs-1" type="text" value="{{$agt->id_agent.' '.$agt->nom}}" name="textdefabre" disabled>
                                        <input type="hidden" value="{{$agt->id_agent}}" name="id_agent"> 
                                        <input type="hidden" value="{{$unClt->id_client}}" name="id_client">                               
                                        <p class="card-text"><strong>Genre :</strong> {{$agt->genre}}</p>
                                        <p class="card-text"><strong>Nationalité :</strong> {{$agt->nationalite}}</p>
                                        <p class="card-text"><strong>Ville de residence :</strong> {{$agt->ville_residence}}</p>
                                        <p class="card-text"><strong>Quartier :</strong> {{$agt->quartier}}</p>
                                    </div>

                                    <div class="card-footer mx-auto">
                                        <button class="btn btn-danger">SÉLECTIONNER</button>
                                        <!--a href="{{--route('agents.show', $agt)--}}"></a-->
                                        <button class="btn btn-success">VOIR PLUS</button>
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
                            
                            <img src="/toutfadila2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <input class="text-uppercase form-control fs-1" type="text" value="{{$agt->id_agent.' '.$agt->nom}}" name="textdefabre" disabled>
                                <input type="hidden" value="{{$agt->id_agent}}" name="id_agent"> 
                                <input type="hidden" value="{{$client->id_client}}" name="id_client">                               
                                <p class="card-text"><strong>Genre :</strong> {{$agt->genre}}</p>
                                <p class="card-text"><strong>Nationalité :</strong> {{$agt->nationalite}}</p>
                                <p class="card-text"><strong>Ville de residence :</strong> {{$agt->ville_residence}}</p>
                                <p class="card-text"><strong>Quartier :</strong> {{$agt->quartier}}</p>
                            </div>

                            <div class="card-footer mx-auto d-grid gap-2 col-6">
                                <button class="btn btn-danger">SÉLECTIONNER</button>
                                <button class="btn btn-success">VOIR PLUS</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
        
</div>

@endsection