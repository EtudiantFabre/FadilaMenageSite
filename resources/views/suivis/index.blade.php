@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste suivis</title>
</head>
<body>
    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
        <!--a href="{{-- route('/creation-suivi')--}}">Commencer</a-->
        <h1 class="text-center">Liste de suivi</h1>
        <div>
            <table class="table table-primary table-hover table-striped rounded table-bordered border-primary text-center table-curved justify-content-center">
                <thead class="table-dark">
                    <tr>
                        <th>Date de passage</th>
                        <th>Heure de passage</th>
                        <!--th>Accesible a la residence</th>
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
                        <th>Repassage</th-->
                        <th>Personnel</th>
                        <th>Agent</th>
                        <th class="bg-danger">Actions</th>
                    </tr>
                </thead>

                @foreach ($suivis as $suivi)
                    <tr>
                        <td>
                            {{$suivi->date_passage}}
                        </td>
                        <td>
                            {{$suivi->heure_passage}}
                        </td>
                        <!--td>
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
                        </td-->
                        <td>
                            {{$suivi->personnel->nom}} {{$suivi->personnel->prenom}}
                        </td>
                        <td>
                            {{$suivi->agent->nom}} {{$suivi->agent->prenom}}
                        </td>
                        <td>
                            <div class="d-flex dropdown mr-1">
                                <form action="{{route('suivis.show', $suivi->id_suivis)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">Afficher</button>
                                </form>

                                <form action="{{route('suivis.destroy', $suivi->id_suivis)}}" method="post" onsubmit="return AccepterSuppression()">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                </form>

                                <form action="{{route('suivis.edit', $suivi->id_suivis)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-info">Modifier</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </table>
        </div>


        <section>
            <form action="{{route('suivis.create')}}">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Créer un suivi</button>
                </div>
            </form>
        </section>
    </div>









</body>
</html>

<script>
    function AccepterSuppression() {
        let result = confirm("Voulez-vous vraiment supprimer ?");
        if (result){
            return true;
        } else {
            return false;
        }
    }
</script>

<script>
    .table-bordered {
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .table-curved {
        border: solid #ccc 1px;
        border-radius: 6px;
        border-left:0px;
    }
</script>

@endsection
