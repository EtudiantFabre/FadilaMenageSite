@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de prospections</title>
</head>
<body>
    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
        <h1 class="text-center">Liste des prospections</h1>
        <table class="table table-dange table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <!--th>Canal</th>
                    <th>Compétence recherché</th>
                    <th>Type de maison</th>
                    <th>Nombre de chambre</th>
                    <th>Nombre de WC douche</th>
                    <th>Taille de la famille</th>
                    <th>Budget</th>
                    <th>Actions menées</th>
                    <th>Conclusion</th-->
                    <th>Agent sélectionné</th>
                    <th>Client sélectionné</th>
                    <th>Facture sélectionné</th>
                    <th class="bg-danger">Actions</th>
                </tr>
            </thead>

            @foreach ($prospections as $prospection)
                <tr>
                    <td>
                        {{$prospection->id_prospection}}
                    </td>
                    <td>
                        {{$prospection->date}}
                    </td>
                    <!--td>
                        {{$prospection->canal}}
                    </td>
                    <td>
                        {{$prospection->competence_rechercher}}
                    </td>
                    <td>
                        {{$prospection->type_maison}}
                    </td>
                    <td>
                        {{$prospection->nbre_de_chambre}}
                    </td>
                    <td>
                        {{$prospection->nbre_wc_douche}}
                    </td>
                    <td>
                        {{$prospection->taille_famille}}
                    </td>
                    <td>
                        {{$prospection->budget}}
                    </td>
                    <td>
                        {{$prospection->actions_menees}}
                    </td>
                    <td>
                        {{$prospection->conclusion}}
                    </td-->
                    <td>
                        {{$prospection->agent->nom}}
                    </td>
                    <td>
                        {{$prospection->id_client}}
                    </td>
                    <td>
                        {{$prospection->id_facture}}
                    </td>
                    <td>
                        <div class="d-flex dropdown mr-1">
                            <form action="{{route('prospections.show', $prospection->id_prospection)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Afficher</button>
                            </form>
                        
                            <form action="{{route('prospections.destroy', $prospection->id_prospection)}}" method="post" onsubmit="return AccepterSuppression()">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        
                            <form action="{{route('prospections.edit', $prospection->id_prospection)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-info">Modifier</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>

        <div>
            <form action="{{route('prospections.create')}}">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">CREER UNE PROSPECTION</button>
                </div>
            </form>
        </div>
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
@endsection