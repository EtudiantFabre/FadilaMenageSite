@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification d'une appel d'offre</title>
</head>
<body>
    <div class="container">
        <form action="{{route('appelOffres.update', $appel)}}" method="POST">
            @csrf
            @method('put')
            <div class="container">
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
                <div>
                    <label for="date_invitation">
                        Date d'invitation<span class="text-danger required" aria-hidden="true">*</span> <input type="date" name="date_invitation" value="{{$appel->date_invitation}}">
                    </label>
                </div>
                <div>
                    <label for="autorite_contractante">
                        Autorité contractante<span class="text-danger required" aria-hidden="true">*</span> <input type="text" name="autorite_contractante" value="{{$appel->autorite_contractante}}">
                    </label>
                </div>
                <div>
                    <label for="numero_aao">
                        Numéro AA0<span class="text-danger required" aria-hidden="true">*</span> <input type="text" name="numero_aao" value="{{$appel->numero_aao}}">
                    </label>
                </div>
                <div>
                    <label for="montant_propose">
                        Montant proposé <span class="text-danger required" aria-hidden="true">*</span> <input type="number" name="montant_propose" value="{{$appel->montant_propose}}">
                    </label>
                </div>
                <div>
                    <label for="nbre_concurents">
                        Nombre de concurent(s)<span class="text-danger required" aria-hidden="true">*</span> <input type="number" name="nbre_concurents" value="{{$appel->nbre_concurents}}">
                    </label>
                </div>

                <div>
                    <label for="classement">
                        Classement<span class="text-danger required" aria-hidden="true">*</span> <input type="text" name="classement" value="{{$appel->classement}}">
                    </label>
                </div>
                <div>
                    <label for="adresse_autorite_contractante">
                        Addresse de l'autorité contractante<span class="text-danger required" aria-hidden="true">*</span> :                             
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td><label>{{__('Ville')}}<span class="text-danger required" aria-hidden="true">*</span></label></td>
                                <td>
                                    <input type="text" name="ville" placeholder="Ville" class="form-control" value="{{$appel->adresse_autorite_contractante['ville']}}">
                                </td>
                            </tr>
                            <tr>
                                <td><label>{{__('Quartier')}}</label></td>
                                <td><input type="text" name="quartier" class="form-control" value="{{$appel->adresse_autorite_contractante['quartier']}}"/></td>
                            </tr>
                        </table>
                    </label>
                </div>
                <div>
                    <label for="date_depot">
                        Date de dépôt<span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="date_depot" value="{{$appel->date_depot}}">
                    </label>
                </div>
                <div>
                    <label for="domaine_postule">
                        Domaine dans lequel vous postulé<span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="domaine_postule" value="{{$appel->domaine_postule}}">
                    </label>
                </div>
                <div>
                    <label for="prix_achat_dossier">
                        Prix d'achat du dossier<span class="text-danger required" aria-hidden="true">*</span>  <input type="number" min="200" name="prix_achat_dossier" value="{{$appel->prix_achat_dossier}}">
                    </label>
                </div>
                <div>
                    <label for="caution_bancaire">
                        Caution bancaire <span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="caution_bancaire" value="{{$appel->caution_bancaire}}">
                    </label>
                </div>
                <div>
                    <label for="resultat">
                        Résultat <span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="resultat" value="{{$appel->resultat}}">
                    </label>
                </div>
                <div>
                    <label for="debut_prestation">
                        Début de la prestation<span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="debut_prestation" value="{{$appel->debut_prestation}}">
                    </label>
                </div>

                <div>
                    <label for="id_societe">
                        Societé<span class="text-danger required" aria-hidden="true">*</span>
                        <select name="id_societe" id="id_societe">
                            <option value=""></option>
                            @foreach ($societes as $uneSociete)
                                @if ($uneSociete['id_societe'] == $appel->id_societe)
                                    <option value={{$uneSociete['id_societe']}} selected>{{$uneSociete['id_societe']}} 👉️ {{$uneSociete['sigle']}}</option>                                    
                                @else
                                    <option value={{$uneSociete['id_societe']}}>{{$uneSociete['id_societe']}} 👉️ {{$uneSociete['sigle']}}</option>
                                @endif
                            @endforeach
                        </select>
                    </label>
                </div>
                <div>
                    <label for="id_personnel">
                        Personnel <span class="text-danger required" aria-hidden="true">*</span>
                        <select name="id_personnel" id="id_personnel">
                            <option value=""></option>
                            @foreach ($personnels as $unPersonnel)
                                @if ($unPersonnel['post_ocuper']=='MARKETING')
                                    @if ($unPersonnel['id_personnel'] == $appel->id_personnel)
                                        <option value={{$unPersonnel['id_personnel']}} selected>{{$unPersonnel['id_personnel']}} 👉️ {{$unPersonnel['nom'].' '.$unPersonnel['prenom']}}</option>                                        
                                    @else
                                        <option value={{$unPersonnel['id_personnel']}}>{{$unPersonnel['id_personnel']}} 👉️ {{$unPersonnel['nom'].' '.$unPersonnel['prenom']}}</option>
                                    @endif
                                @endif
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="MODIFIER"/>
            </div>
        </form>
    </div>
</body>
</html>
@endsection