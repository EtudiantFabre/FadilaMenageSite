@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTE DES ÉVALUATIONS</title>
</head>
<body>
    <div class="container">
        <h1>LISTE DES ÉVALUATIONS</h1>
        <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>Identifiant</th>
                    <th>PÉRIODICITÉ</th>
                    <th>DEBUT DE LA PÉRIODE</th>
                    <th>FIN DE LA PÉRIODE</th>
                    <!--th>NOTE DE L'ÉVALUATION</th>
                    <th>COMMENTAIRE</th>
                    <th>SUGESTION</th-->
                    <th>AGENT</th>
                    <th class="bg-danger">Actions</th>
                </tr>
            </thead>

            @foreach ($evaluations as $evaluation)
                <tr>
                    <td>
                        {{$evaluation->id_evaluation}}
                    </td>
                    <td>
                        {{$evaluation->periodicite}}
                    </td>
                    <td>
                        {{$evaluation->debut_periode}}
                    </td>
                    <td>
                        {{$evaluation->fin_periode}}
                    </td>
                    <!--td>
                        {{$evaluation->note_sur_vingt}}
                    </td>
                    <td>
                        {{$evaluation->commentaire}}
                    </td>
                    <td>
                        {{$evaluation->sugestion}}
                    </td-->
                    <td>
                        {{strtoupper($evaluation->agent->nom)}} {{strtoupper($evaluation->agent->prenom)}}
                    </td>
                    <td>
                        <div class="d-flex dropdown mr-1">
                            <form action="{{route('evaluations.show', $evaluation->id_evaluation)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Afficher</button>
                            </form>
                        
                            <form action="{{route('evaluations.destroy', $evaluation->id_evaluation)}}" method="post" onsubmit="return AccepterSuppression()">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        
                            <form action="{{route('evaluations.edit', $evaluation->id_evaluation)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-info">Modifier</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <br/>
        <div class="row-cols-auto mt-3">
            {{$evaluations->links()}}
        </div>
        <br>
    </div>

    <section>
        <form action="{{route('evaluations.create')}}">
            @csrf
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">CRÉER UNE ÉVALUATION</button>
            </div>
        </form>
    </section>
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

@endsection