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
        <h1 class="text-center">Création d'une prospection</h1>
        
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
            <br>
            <div>
                    Compétence recherché<span class="text-danger required" aria-hidden="true">*</span> :
                    <select class="form-select form-select-lg" name="competence_rechercher" id="competence_rechercher">
                        <option value="">Sélectionner une compétence</option>
                        <option value="NOUNOU">NOUNOU</option>
                        <option value="CHAUFFEUR">CHAUFFEUR</option>
                        <option value="CUISINIER">CUISINIER</option>
                        <option value="ENTRETIEN">ENTRETIEN</option>
                    </select>
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
                Agent<span class="text-danger required" aria-hidden="true">*</span> : 
                <select name="id_agent" class="form-select form-select-lg" id="id_agent">
                    <option value="">Sélectionner l'agent ici</option>
                    @foreach ($agents as $agent)
                        <option value="{{$agent['id_agent']}}">{{$agent['id_agent']}} 👉️👉️ {{$agent['nom']." ".$agent['prenom']}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                Client<span class="text-danger required" aria-hidden="true">*</span> : 
                <select name="id_client" class="form-select form-select-lg" id="id_client">
                    <option value="">Client à sélectionner</option>
                    @foreach ($clients as $client)
                        <option value="{{$client['id_client']}}">{{$client['id_client']}} 👉️👉️ {{$client['nom']}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-floating">
                Aboutissement (ceci est optionnel) : 
                <input type="text" name="aboutissement" autocomplete="additional-name" class="form-control">
                <!--textarea name="aboutissement" id="conclusion" class="form-control" rows="-10" placeholder="Entrer la conclusion ici"></textarea-->
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="ENREGISTRER LA PROSPECTION"/>
            </div>
        </form>
    </div>
</body>
</html>

@endsection