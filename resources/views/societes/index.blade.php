@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTE DES SOCIETÉS</title>
</head>
<body>
    <div class="container">
        <h1>LISTE DES SOCIETÉS</h1>
        <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>Identifiant</th>
                    <th>Sigle</th>
                    <!--th>Description</th>
                    <th>Date d'offre</th-->
                    <th>Domaine</th>
                    <th class="bg-danger">Actions</th>
                </tr>
            </thead>

            @foreach ($societes as $societe)
                <tr>
                    <td>
                        {{$societe->id_societe}}
                    </td>
                    <td>
                        {{$societe->sigle}}
                    </td>
                    <!--td>
                        {{$societe->description}}
                    </td>
                    <td>
                        {{$societe->date_offre}}
                    </td-->
                    <td>
                        {{$societe->domaine}}
                    </td>
                    <td>
                        <div class="d-flex dropdown mr-1">
                            <form action="{{route('societes.show', $societe->id_societe)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Afficher</button>
                            </form>
                        
                            <form action="{{route('societes.destroy', $societe->id_societe)}}" method="post" onsubmit="return AccepterSuppression()">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        
                            <form action="{{route('societes.edit', $societe->id_societe)}}" method="GET">
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
            {{$societes->links()}}
        </div>
        <br>
    </div>

    <section>
        <form action="{{route('societes.create')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">CRÉER UNE SOCIETE</button>
            </div>
        </form>
    </section>
</body>
</html>

@endsection