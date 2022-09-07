@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d'une prospection</title>
</head>
<body>
    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
        <h1 class="text-center">Remplir ce formulaire pour terminer vôtre demande</h1>
        
        <form action="{{route('prospections.store')}}" method="POST">
            {{ csrf_field() }}
            @csrf
            @method('post')
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Raison social<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" name="raison_social" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Date<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="date" name="date_prospection" id="date_prospection" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Canal<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" id="canal" value="Site web" name="canal" class="form-control">
            </div>
            <div>
                <input type="hidden" name="competence_rechercher" value="{{$agent->poste_candidate}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Type de maison<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="text" id="type_maison" name="type_maison" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de chambre<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="number" id="nbre_de_chambre" name="nbre_de_chambre" min="1" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de WC douche<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="number" id="nbre_wc_douche" name="nbre_wc_douche" min="1" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Taille de la famille<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="number" id="taille_famille" name="taille_famille" min="1" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Budget<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="number" id="budget" name="budget" min="1" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Information complémentaire<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="text" id="info_complementaire" name="info_complementaire" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Action menée<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" id="actions_menees" name="actions_menees" class="form-control">
            </div>
            <br>
            <div>
                <!--span class="input-group-text" id="inputGroup-sizing-default">Agent sélectionner :</span> 
                <input type="text" id="actions_menees" name="actions_menees" class="text-uppercase form-control fs-1" value="{{$agent->nom.' '.$agent->prenom}}" disabled-->
                <input type="hidden" name="id_agent" value="{{$agent->id_agent}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <!--span class="input-group-text" id="inputGroup-sizing-default">Client voulant éffectuer la prospection :</span>
                <input type="text" id="actions_menees" name="actions_menees" class="form-control" value="{{$client->nom}}"-->
                <input type="hidden" name="id_client" value="{{$client->id_client}}">
                <input type="hidden" name="client-prospection" value="vrai">
                <input type="hidden" name="aboutissement" value="Attente">
            </div>
            <!--div class="form-floating">
                Aboutissement (ceci est optionnel) : 
                <input type="text" name="aboutissement" autocomplete="additional-name" class="form-control">
                <textarea name="aboutissement" id="conclusion" class="form-control" rows="-10" placeholder="Entrer la conclusion ici"></textarea>
            </div-->
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="FORMULAIRE REMPLI"/>
            </div>
        </form>
    </div>
</body>
</html>

@endsection