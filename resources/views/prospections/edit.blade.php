@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification de prospection</title>
</head>
<body>
    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
        <h1>Modification d'une prospection</h1>
        <form action="{{route('prospections.update', $prospection)}}" method="POST">
            @csrf
            @method('put')
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
                <input type="text" name="raison_social" class="form-control" value="{{$prospection->raison_social}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Date de prospection<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="date" name="date_prospection" id="date_prospection" class="form-control" value="{{$prospection->date}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Canal<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" id="canal" value="Site web" name="canal" class="form-control" value="{{$prospection->canal}}">
            </div>
            <br>
            <div>
                Compétence recherché<span class="text-danger required" aria-hidden="true">*</span> :
                <select name="competence_rechercher" id="competence_rechercher" class="form-select form-select-lg">
                    @switch($prospection->competence_rechercher)
                        @case('NOUNOU')
                            <option selected value="NOUNOU">NOUNOU</option>
                            <option value="CHAUFFEUR">CHAUFFEUR</option>
                            <option value="CUISINE">CUISINE</option>
                            <option value="NETOYAGE">NETOYAGE</option>
                            @break
                        @case('CHAUFFEUR')
                            <option value="NOUNOU">NOUNOU</option>
                            <option selected value="CHAUFFEUR">CHAUFFEUR</option>
                            <option value="CUISINE">CUISINE</option>
                            <option value="NETOYAGE">NETOYAGE</option> 
                            @break
                        @case ('CUISINE')
                            <option value="NOUNOU">NOUNOU</option>
                            <option value="CHAUFFEUR">CHAUFFEUR</option>
                            <option selected value="CUISINE">CUISINE</option>
                            <option value="NETOYAGE">NETOYAGE</option>                                
                            @break

                        @case ('NETOYAGE')
                            <option value="NOUNOU">NOUNOU</option>
                            <option value="CHAUFFEUR">CHAUFFEUR</option>
                            <option value="CUISINE">CUISINE</option>
                            <option selected value="NETOYAGE">NETOYAGE</option>                                
                            @break
                        @default
                            <option value="NOUNOU">NOUNOU</option>
                            <option value="CHAUFFEUR">CHAUFFEUR</option>
                            <option value="CUISINE">CUISINE</option>
                            <option value="NETOYAGE">NETOYAGE</option> 
                    @endswitch
                </select>
            </div>
            <br>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Type de maison<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="text" id="type_maison" name="type_maison" class="form-control" value="{{$prospection->type_maison}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de chambre<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="number" id="nbre_de_chambre" name="nbre_de_chambre" min="1" class="form-control" value="{{$prospection->nbre_de_chambre}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de WC douche<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="number" id="nbre_wc_douche" name="nbre_wc_douche" min="1" class="form-control" value="{{$prospection->nbre_wc_douche}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Taille de la famille<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="number" id="taille_famille" name="taille_famille" min="1" class="form-control" value="{{$prospection->taille_famille}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Budget<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="number" id="budget" name="budget" min="1" class="form-control" value="{{$prospection->budget}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Information complémentaire<span class="text-danger required" aria-hidden="true"></span></span>
                <input type="text" id="info_complementaire" name="info_complementaire" class="form-control" value="{{$prospection->info_complementaire}}">
            </div>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Action menée<span class="text-danger required" aria-hidden="true">*</span></span>
                <input type="text" id="actions_menees" name="actions_menees" class="form-control" value="{{$prospection->actions_menees}}">
            </div>
            <br>
            <div>
                Agent<span class="text-danger required" aria-hidden="true">*</span> : 
                <select name="id_agent" id="id_agent" class="form-select form-select-lg">
                    @foreach ($agents as $unAgent)
                        @if ($unAgent['id_agent'] == $prospection->id_agent)
                            <option selected value={{$unAgent['id_agent']}}>{{$unAgent['id_agent']}} 👉️ {{$unAgent['nom'].' '.$unAgent['prenom']}}</option>
                        @else
                            <option value={{$unAgent['id_agent']}}>{{$unAgent['id_agent']}} 👉️ {{$unAgent['nom'].' '.$unAgent['prenom']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                Client<span class="text-danger required" aria-hidden="true">*</span> : 
                <select name="id_client" id="id_client" class="form-select form-select-lg">
                    @foreach ($clients as $unClient)
                        @if ($unClient['id_client'] == $prospection->unClient)
                            <option selected value={{$unClient['id_client']}}>{{$unClient['id_client']}} 👉️ {{$unClient['nom']}}</option>
                        @else
                            <option value={{$unClient['id_client']}}>{{$unAgent['id_client']}} 👉️ {{$unClient['nom']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <br>
            <!--div>
                Facture<span class="text-danger required" aria-hidden="true">*</span> : 
                <select name="id_facture" id="id_facture">
                    @foreach ($factures as $facture)
                        @if ($facture['id_facture'] == $prospection->id_facture)
                            <option selected value={{$facture['id_facture']}}>{{$facture['id_facture']}}</option>
                        @else
                            <option value={{$facture['id_facture']}}>{{$facture['id_facture']}}</option>
                        @endif
                    @endforeach
                </select>
            </div-->
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Aboutissement<span class="text-danger required" aria-hidden="true"></span></span>
                    <input type="text" name="aboutissement" value="{{$prospection->aboutissement}}" class="form-control">
                    <!--textarea name="conclusion" id="conclusion"  rows="-10" placeholder="Entrer la conclusion ici">{{$prospection->conclusion}}</textarea-->
                </label>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="MODIFIER LA PROSPECTION"/>
            </div>
        </form>
    </div>
</body>
</html>

@endsection