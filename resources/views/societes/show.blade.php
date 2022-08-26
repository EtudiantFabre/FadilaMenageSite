@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFFICHAGE D'UNE SOCIETÉ</title>
</head>
<body>
    <div class="container">
        <h1>AFFICHAGE D'UNE SOCIETÉ</h1>
        <form action="{{route('societes.index')}}" method="GET">
            @csrf
            @method('GET')

            <div>
                <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Identifiant</th>
                            <th>Sigle</th>
                            <th>Description</th>
                            <th>Date d'offre</th>
                            <th>Domaine</th>
                        </tr>
                    </thead>
        
                    <tr>
                        <td>
                            {{$societe->id_societe}}
                        </td>
                        <td>
                            {{$societe->sigle}}
                        </td>
                        <td>
                            {{$societe->description}}
                        </td>
                        <td>
                            {{$societe->date_offre}}
                        </td>
                        <td>
                            {{$societe->domaine}}
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