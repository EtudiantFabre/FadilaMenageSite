@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Agents Poctuels</title>
</head>
<body>
    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
        <h1 class="text-center">Liste des agents ponctuels</h1>
        <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>N° Agent-Ponctuel</th>
                    <th>Agents associés</th>
                    <th>Ponctuel Associés</th>
                    <th class="bg-danger">Autres activités</th>
                </tr>
            </thead>
            @foreach ($agent_ponctuels as $agent_p)
                <tr>
                    <td>
                        {{$agent_p->id_agent_ponctuel}}
                    </td>
                    <td>
                        {{$agent_p->agents->nom.' '.$agent_p->agents->prenom}}
                    </td>
                    <td>
                        {{$agent_p->ponctuels->nom.' '.$agent_p->ponctuels->prenom}}
                    </td>
                    <td>
                        <div class="d-flex dropdown mr-1">
                            <form action="{{route('agentPonctuels.show', $agent_p->id_agent_ponctuel)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Afficher</button>
                            </form>
                        
                            <form action="{{route('agentPonctuels.destroy', $agent_p->id_agent_ponctuel)}}" method="post" onsubmit="return AccepterSuppression()">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        
                            <form action="{{route('agentPonctuels.edit', $agent_p->id_agent_ponctuel)}}" method="GET">
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
            {{$agent_ponctuels->links()}}
        </div>
        <br>
    </div>
    <section>
        <form action="{{route('agentPonctuels.create')}}">
            @csrf
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">ASSOCIER DES AGENTS AUX PONCTUELS</button>
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