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
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Canal<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" id="canal" value="Site web" name="canal" class="form-control">
            </div>
            <br>
            <div>
                <label for="competence_rechercher">
                    Compétence recherché<span class="text-danger required" aria-hidden="true">*</span> :
                    <select class="form-select form-select-lg" name="competence_rechercher" id="competence_rechercher">
                        <option value="NOUNOU">NOUNOU</option>
                        <option value="CHAUFFEUR">CHAUFFEUR</option>
                        <option value="CUISINIER">CUISINIER</option>
                        <option value="ENTRETIEN">ENTRETIEN</option>
                    </select>
                </label>
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Type de maison<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" id="type_maison" name="type_maison" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de chambre<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="number" id="nbre_de_chambre" name="nbre_de_chambre" min="1" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de WC douche<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="number" id="nbre_wc_douche" name="nbre_wc_douche" min="1" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Taille de la famille<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="number" id="taille_famille" name="taille_famille" min="1" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Budget<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="number" id="budget" name="budget" min="1" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Information complémentaire<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" id="info_complementaire" name="info_complementaire" class="form-control">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Action menée<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" id="actions_menees" name="actions_menees">
                </label>
            </div>
            <br>
            <div>
                <label for="id_agent">
                    Agent<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_agent" id="id_agent">
                        @foreach ($agents as $agent)
                            <option value="{{$agent['id_agent']}}">{{$agent['id_agent']}} 👉️👉️ {{$agent['nom']." ".$agent['prenom']}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <br>
            <div>
                <label for="id_client">
                    Client<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_client" id="id_client">
                        @foreach ($clients as $client)
                            <option value="{{$client['id_client']}}">{{$client['id_client']}} 👉️👉️ {{$client['nom']}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <br>
            <div>
                <label for="id_facture">
                    Facture<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_facture" id="id_facture">
                        @foreach ($factures as $facture)
                            <option value="{{$facture['id_facture']}}">{{$facture['id_facture']}} 👉️👉️ {{"T-TTC => ".$facture['total_ttc']}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <br>
            <div class="form-floating">
                Conclusion (ceci est optionnel) : 
                <textarea name="conclusion" id="conclusion" class="form-control" rows="-10" placeholder="Entrer la conclusion ici"></textarea>
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