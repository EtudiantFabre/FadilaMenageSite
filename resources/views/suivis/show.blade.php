@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage de suivi</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Affichage de suivi</h1>
        <form action="{{route('suivis.index')}}" method="GET">
            <div>
                <table class="table table-dange table-hover table-striped table-bordered border-primary text-center justify-content-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Date de passage</th>
                            <th>Heure de passage</th>
                            <th>Accesible a la residence</th>
                            <th>Verification & signature de l'agent</th>
                            <th>Presence de l'agent</th>
                            <th>Heure d'arrive de l'agent</th>
                            <th>Presentation corporel vestimentaire</th>
                            <th>Entretien plafond</th>
                            <th>Essuyage vitre</th>
                            <th>Depousierage appareil</th>
                            <th>Depousierage meuble</th>
                            <th>Entretien corbeil</th>
                            <th>Entretien sanitaire</th>
                            <th>Balayage et netoyage du sol</th>
                            <th>Repassage</th>
                            <th>Personnel</th>
                            <th>Agent</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            {{$suivi->date_passage}}
                        </td>
                        <td>
                            {{$suivi->heure_passage}}
                        </td>
                        <td>
                            {{$suivi->acces_residence}}
                        </td>
                        <td>
                            {{$suivi->verif_presence_agent}}
                        </td>
                        <td>
                            {{$suivi->presence_agent}}
                        </td>
                        <td>
                            {{$suivi->heure_arrive_agent}}
                        </td>
                        <td>
                            {{$suivi->pres_corporel_vestimentaire}}
                        </td>
                        <td>
                            {{$suivi->entretient_plafond}}
                        </td>
                        <td>
                            {{$suivi->essuyage_vitre}}
                        </td>
                        <td>
                            {{$suivi->depousierage_appareil}}
                        </td>
                        <td>
                            {{$suivi->depousierage_meuble}}
                        </td>
                        <td>
                            {{$suivi->entretient_corbeil}}
                        </td>
                        <td>
                            {{$suivi->entretient_sanitaire}}
                        </td>
                        <td>
                            {{$suivi->balayage_netoyage_sol}}
                        </td>
                        <td>
                            {{$suivi->repassage}}
                        </td>
                        <td>
                            {{$suivi->personnel->nom}} {{$suivi->personnel->prenom}}
                        </td>
                        <td>
                            {{$suivi->agent->nom}} {{$suivi->agent->prenom}}
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