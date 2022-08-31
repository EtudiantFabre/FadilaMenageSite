@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFFICHAGE DE L'APPEL D'OFFRES</title>
</head>
<body>
    <div class="container">
        <form action="{{route('appelOffres.index')}}" method="GET">
            @csrf
            @method('GET')
            <div>
                <h1>AFFICHAGE DE L'APPEL D'OFFRES</h1>
                <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Date d'invitation</th>
                            <th>Autorite contractante</th>
                            <th>Numéro AA0</th>
                            <th>Montant Proposé</th>
                            <th>Nombre de concurent(s)</th>
                            <th>Classement</th>
                            <th>Adresse de l'autorité contractante : Ville</th>
                            <th>Adresse de l'autorité contractante : Quartier</th>
                            <th>Date de dépôt</th>
                            <th>Domaine postulé</th>
                            <th>Prix d'achat du dossier</th>
                            <th>Caution bancaire</th>
                            <th>Résultat</th>
                            <th>Début de prestation</th>
                            <th>Societé</th>
                            <th>Personnel</th>
                        </tr>
                    </thead>
                    
                    <tr>
                        <td>
                            {{$appel->date_invitation}}
                        </td>
                        <td>
                            {{$appel->autorite_contractante}}
                        </td>
                        <td>
                            {{$appel->numero_aao}}
                        </td>
                        <td>
                            {{$appel->montant_propose}}
                        </td>
                        <td>
                            {{$appel->nbre_concurents}}
                        </td>
    
                        <td>
                            {{$appel->classement}}
                        </td>
                        <td>
                            {{$appel->adresse_autorite_contractante['ville']}}
                        </td>
                        <td>
                            {{$appel->adresse_autorite_contractante['quartier']}}
                        </td>
                        <td>
                            {{$appel->date_depot}}
                        </td>
                        <td>
                            {{$appel->domaine_postule}}
                        </td>
                        <td>
                            {{$appel->prix_achat_dossier}}
                        </td>
                        <td>
                            {{$appel->caution_bancaire}}
                        </td>
                        <td>
                            {{$appel->resultat}}
                        </td>
                        <td>
                            {{$appel->debut_prestation}}
                        </td>
                        <td>
                            {{$appel->id_societe}}
                        </td>
                        <td>
                            {{$appel->id_personnel}}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-lg" type="submit">J'ai vu</button>
            </div>
        </form>
    </div>
</body>
</html>
@endsection