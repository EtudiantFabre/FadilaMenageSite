@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTE DES PONCTUELS</title>
</head>
<body>
    <div class="container">
        <h1>LISTE DES PONCTUELS</h1>
        <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>Identifiant</th>
                    <th>DATE</th>
                    <th>NOM</th>
                    <!--th>PRÉNOM</th>
                    <th>ADRESSE : VILLE</th>
                    <th>ADRESSE : QUARTIER</th-->
                    <th>FORFAIT</th-->
                    <th>MONTANT TTC</th>
                    <th class="bg-danger">Actions</th>
                </tr>
            </thead>

            @foreach ($ponctuels as $ponctuel)
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
                    <!--td>
                        {{$ponctuel->prenom}}
                    </td>
                    <td>
                        {{$ponctuel->adresse['ville']}}
                    </td>
                    <td>
                        {{$ponctuel->adresse['quartier']}}
                    </td-->
                    <td>
                        {{$ponctuel->forfait}}
                    </td>
                    <td>
                        {{$ponctuel->montant_ttc}}
                    </td>
                    <td>
                        <div class="d-flex dropdown mr-1">
                            <form action="{{route('ponctuels.show', $ponctuel->id_ponctuel)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Afficher</button>
                            </form>
                        
                            <form action="{{route('ponctuels.destroy', $ponctuel->id_ponctuel)}}" method="post" onsubmit="return AccepterSuppression()">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        
                            <form action="{{route('ponctuels.edit', $ponctuel->id_ponctuel)}}" method="GET">
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
            {{$ponctuels->links()}}
        </div>
        <br>
    </div>

    <section>
        <form action="{{route('ponctuels.create')}}">
            @csrf
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">CRÉER UN PONCTUEL</button>
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