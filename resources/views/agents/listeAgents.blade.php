@extends('layout')

@section('title', "Sélection d'un agent ")

@section('content')

<div class="text-center">
    <h1>LISTE DES AGENTS</h1>
</div>

<div>
    @foreach ($agents as $agt)
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$agt->nom}}</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection