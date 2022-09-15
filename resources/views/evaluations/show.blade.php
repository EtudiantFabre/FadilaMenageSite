@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFFICHAGE D'UNE ÉVALUATION</title>
</head>
<body>
    <div class="container">
        <h1>AFFICHAGE D'UNE ÉVALUATION</h1>
        <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>Identifiant</th>
                    <th>PÉRIODICITÉ</th>
                    <th>DEBUT DE LA PÉRIODE</th>
                    <th>FIN DE LA PÉRIODE</th>
                    <th>NOTE DE L'ÉVALUATION</th>
                    <th>COMMENTAIRE</th>
                    <th>SUGESTION</th>
                </tr>
            </thead>

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
                <td>
                    {{$evaluation->note_sur_vingt}}
                </td>
                <td>
                    {{$evaluation->commentaire}}
                </td>
                <td>
                    {{$evaluation->sugestion}}
                </td>
                <td>
                    {{strtoupper($evaluation->agent->nom)}} {{strtoupper($evaluation->agent->prenom)}}
                </td>
            </tr>
        </table>
        <br/>
    </div>

    <section>
        <form action="{{route('evaluations.index')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">J'ai vu</button>
            </div>
        </form>
    </section>
</body>
</html>

@endsection