@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRÉATION D'UNE APPEL D'OFFRE</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>CRÉATION D'UNE APPEL D'OFFRE</h1>
            <form action="{{route('appelOffres.store')}}" method="POST">
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
                <div>
                    <div>
                        <label for="date_invitation">
                            Date d'invitation<span class="text-danger required" aria-hidden="true">*</span> <input type="date" name="date_invitation" placeholder="JJ/MM/AAAA">
                        </label>
                    </div>
                    <div>
                        <label for="autorite_contractante">
                            Autorité contractante<span class="text-danger required" aria-hidden="true">*</span> <input type="text" name="autorite_contractante" placeholder="Entrer le nom de l'autorité">
                        </label>
                    </div>
                    <div>
                        <label for="numero_aao">
                            Numéro AA0<span class="text-danger required" aria-hidden="true">*</span> <input type="text" name="numero_aao" placeholder="Numéro">
                        </label>
                    </div>
                    <div>
                        <label for="montant_propose">
                            Montant proposé <span class="text-danger required" aria-hidden="true">*</span> <input type="number" name="montant_propose" placeholder="Montant">
                        </label>
                    </div>
                    <div>
                        <label for="nbre_concurents">
                            Nombre de concurent(s)<span class="text-danger required" aria-hidden="true">*</span> <input type="number" name="nbre_concurents" placeholder="Nombre">
                        </label>
                    </div>

                    <div>
                        <label for="classement">
                            Classement<span class="text-danger required" aria-hidden="true">*</span> <input type="text" name="classement">
                        </label>
                    </div>
                    <div>
                        <label for="adresse_autorite_contractante">
                            Addresse de l'autorité contractante<span class="text-danger required" aria-hidden="true">*</span> :                             
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <td><label>{{__('Ville')}}<span class="text-danger required" aria-hidden="true">*</span></label></td>
                                    <td>
                                        <input type="text" name="ville" placeholder="Ville" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>{{__('Quartier')}}</label></td>
                                    <td><input type="text" name="quartier" class="form-control" placeholder="Quartier"/></td>
                                </tr>
                            </table>
                        </label>
                    </div>
                    <div>
                        <label for="date_depot">
                            Date de dépôt<span class="text-danger required" aria-hidden="true">*</span>  <input type="date" name="date_depot" placeholder="JJ/MM/AA">
                        </label>
                    </div>
                    <div>
                        <label for="domaine_postule">
                            Domaine dans lequel vous postulé<span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="domaine_postule">
                        </label>
                    </div>
                    <div>
                        <label for="prix_achat_dossier">
                            Prix d'achat du dossier<span class="text-danger required" aria-hidden="true">*</span>  <input type="number" min="200" name="prix_achat_dossier">
                        </label>
                    </div>
                    <div>
                        <label for="caution_bancaire">
                            Caution bancaire <span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="caution_bancaire">
                        </label>
                    </div>
                    <div>
                        <label for="resultat">
                            Résultat <span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="resultat">
                        </label>
                    </div>
                    <div>
                        <label for="debut_prestation">
                            Début de la prestation<span class="text-danger required" aria-hidden="true">*</span>  <input type="text" name="debut_prestation">
                        </label>
                    </div>

                    <div>
                        <label for="id_societe">
                            Societé<span class="text-danger required" aria-hidden="true">*</span>
                            <select name="id_societe" id="id_societe">
                                @foreach ($societes as $uneSociete)
                                    <option value={{$uneSociete['id_societe']}}>{{$uneSociete['id_societe']}} 👉️ {{$uneSociete['sigle']}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div>
                        <label for="id_personnel">
                            Personnel <span class="text-danger required" aria-hidden="true">*</span>
                            <select name="id_personnel" id="id_personnel">
                                @foreach ($personnels as $unPersonnel)
                                    @if ($unPersonnel['post_ocuper']=='MARKETING')
                                        <option value={{$unPersonnel['id_personnel']}}>{{$unPersonnel['id_personnel']}} 👉️ {{$unPersonnel['nom'].' '.$unPersonnel['prenom']}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </label>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" class="btn btn-primary" value="ENREGISTRER L'APPEL D'OFFRE"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection