@extends('layout')

@section('title', "Sélection d'un agent ")

@section('content')

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

<div class="container">
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
                                        <input class="text-uppercase form-control fs-1" type="text" value="{{$agt->id_agent.' '.$agt->nom}}" name="textdefabre" disabled>
                                        <input type="hidden" value="{{$agt->id_agent}}" name="id_agent"> 
                                        <input type="hidden" value="{{$unClt->id_client}}" name="id_client">                               
                                        <p class="card-text"><strong>Genre :</strong> {{$agt->genre}}</p>
                                        <p class="card-text"><strong>Nationalité :</strong> {{$agt->nationalite}}</p>
                                        <p class="card-text"><strong>Ville de residence :</strong> {{$agt->ville_residence}}</p>
                                        <p class="card-text"><strong>Quartier :</strong> {{$agt->quartier}}</p>
                                    </div>

                                    <div class="card-footer mx-auto d-flex justify-content-center">
                                        <button class="btn btn-danger">SÉLECTIONNER</button>
                                        <!--a href="{{--route('agents.show', $agt)--}}"></a-->
                                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">VOIR PLUS</button>

                                                                                <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">#Information de l'agent {{strtoupper($agt->nom)}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
                                                        <div class="inner">
                                                            <div class="image-holder">
                                                                <img src="images/registration-form-1.jpg" alt="">
                                                            </div>
                                                            <form action="">
                                                                <h3>Registration Form</h3>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="First Name" class="form-control">
                                                                    <input type="text" placeholder="Last Name" class="form-control">
                                                                </div>
                                                                <div class="form-wrapper">
                                                                    <input type="text" placeholder="Username" class="form-control">
                                                                    <i class="zmdi zmdi-account"></i>
                                                                </div>
                                                                <div class="form-wrapper">
                                                                    <input type="text" placeholder="Email Address" class="form-control">
                                                                    <i class="zmdi zmdi-email"></i>
                                                                </div>
                                                                <div class="form-wrapper">
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="" disabled selected>Gender</option>
                                                                        <option value="male">Male</option>
                                                                        <option value="femal">Female</option>
                                                                        <option value="other">Other</option>
                                                                    </select>
                                                                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                                                                </div>
                                                                <div class="form-wrapper">
                                                                    <input type="password" placeholder="Password" class="form-control">
                                                                    <i class="zmdi zmdi-lock"></i>
                                                                </div>
                                                                <div class="form-wrapper">
                                                                    <input type="password" placeholder="Confirm Password" class="form-control">
                                                                    <i class="zmdi zmdi-lock"></i>
                                                                </div>
                                                                <button>Register
                                                                    <i class="zmdi zmdi-arrow-right"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
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
                                <button class="btn btn-danger">SÉLECTIONNER</button>
                                <button type="button" class="btn btn-success">VOIR PLUS</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
        
</div>

@endsection