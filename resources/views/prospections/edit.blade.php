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
    <div class="container">
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
            <div>
                <label for="raison_social">
                    Raison social<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="raison_social" value="{{$prospection->raison_social}}">
                </label>
            </div>
            <br>
            <div>
                <label for="date">
                    Date<span class="text-danger required" aria-hidden="true">*</span> : <input type="date" name="date" id="date" value="{{$prospection->date}}">
                </label>
            </div>
            <br>
            <div>
                <label for="canal">
                    Canal<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="canal" value="Site web" name="canal" value="{{$prospection->canal}}">
                </label>
            </div>
            <br>
            <div>
                <label for="competence_rechercher">
                    Compétence recherché<span class="text-danger required" aria-hidden="true">*</span> :
                    <select name="competence_rechercher" id="competence_rechercher">
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
                </label>
            </div>
            <br>
            <div>
                <label for="type_maison">
                    Type de maison<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="type_maison" name="type_maison" value="{{$prospection->type_maison}}">
                </label>
            </div>
            <br>
            <div>
                <label for="nbre_de_chambre">
                    Nombre de chambre<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="nbre_de_chambre" name="nbre_de_chambre" min="1" value="{{$prospection->nbre_de_chambre}}">
                </label>
            </div>
            <br>
            <div>
                <label for="nbre_wc_douche">
                    Nombre de WC douche<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="nbre_wc_douche" name="nbre_wc_douche" min="1" value="{{$prospection->nbre_wc_douche}}">
                </label>
            </div>
            <br>
            <div>
                <label for="taille_famille">
                    Taille de la famille<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="taille_famille" name="taille_famille" min="1" value="{{$prospection->taille_famille}}">
                </label>
            </div>
            <br>
            <div>
                <label for="budget">
                    Budget<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="budget" name="budget" min="1" value="{{$prospection->budget}}">
                </label>
            </div>
            <br>
            <div>
                <label for="info_complementaire">
                    Information complémentaire<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="info_complementaire" name="info_complementaire" value="{{$prospection->info_complementaire}}">
                </label>
            </div>
            <br>
            <div>
                <label for="actions_menees">
                    Action menée<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="actions_menees" name="actions_menees" value="{{$prospection->actions_menees}}">
                </label>
            </div>
            <br>
            <div>
                <label for="id_agent">
                    Agent<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_agent" id="id_agent">
                        @foreach ($agents as $unAgent)
                            @if ($unAgent['id_agent'] == $prospection->id_agent)
                                <option selected value={{$unAgent['id_agent']}}>{{$unAgent['id_agent']}} 👉️ {{$unAgent['nom'].' '.$unAgent['prenom']}}</option>
                            @else
                                <option value={{$unAgent['id_agent']}}>{{$unAgent['id_agent']}} 👉️ {{$unAgent['nom'].' '.$unAgent['prenom']}}</option>
                            @endif
                        @endforeach
                    </select>
                </label>
            </div>
            <br>
            <div>
                <label for="id_client">
                    Client<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_client" id="id_client">
                        @foreach ($clients as $unClient)
                            @if ($unClient['id_client'] == $prospection->unClient)
                                <option selected value={{$unClient['id_client']}}>{{$unClient['id_client']}} 👉️ {{$unClient['nom']}}</option>
                            @else
                                <option value={{$unClient['id_client']}}>{{$unAgent['id_client']}} 👉️ {{$unClient['nom']}}</option>
                            @endif
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
                            @if ($facture['id_facture'] == $prospection->id_facture)
                                <option selected value={{$facture['id_facture']}}>{{$facture['id_facture']}}</option>
                            @else
                                <option value={{$facture['id_facture']}}>{{$facture['id_facture']}}</option>
                            @endif
                        @endforeach
                    </select>
                </label>
            </div>
            <br>
            <div>
                <label for="conclusion">
                    Conclusion<span class="text-danger required" aria-hidden="true">*</span> : 
                    <textarea name="conclusion" id="conclusion"  rows="-10" placeholder="Entrer la conclusion ici">{{$prospection->conclusion}}</textarea>
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