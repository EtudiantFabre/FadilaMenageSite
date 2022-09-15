@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFFICHAGE DE PONCTUEL</title>
</head>
<body>
    <div class="container">
        <h1>AFFICHAGE DE PONCTUEL</h1>
        <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>Identifiant</th>
                    <th>DATE</th>
                    <th>NOM</th>
                    <th>PRÉNOM</th>
                    <th>ADRESSE : VILLE</th>
                    <th>ADRESSE : QUARTIER</th>
                    <th>FORFAIT</th-->
                    <th>MONTANT TTC</th>
                </tr>
            </thead>

            
            <tr>
                <td>
                    {{$ponctuel->id_ponctuel}}
                </td>
                <td>
                    {{$ponctuel->date}}
                </td>
                <td>
                    {{$ponctuel->nom}}
                </td>
                <td>
                    {{$ponctuel->prenom}}
                </td>
                <td>
                    {{$ponctuel->adresse['ville']}}
                </td>
                <td>
                    {{$ponctuel->adresse['quartier']}}
                </td>
                <td>
                    {{$ponctuel->forfait}}
                </td>
                <td>
                    {{$ponctuel->montant_ttc}}
                </td>
            </tr>
        </table>
        <br/>
    </div>

    <section>
        <form action="{{route('ponctuels.index')}}">
            @csrf
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">J'ai vu</button>
            </div>
        </form>
    </section>
</body>
</html>
@endsection