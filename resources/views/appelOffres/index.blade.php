@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTE DES APPELS D'OFFRES</title>
</head>
<body>
    <div>
        <h1>LISTE DES APPELS D'OFFRES</h1>
        <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>Classement</th>
                    <th>Adresse de l'autorité contractante : Ville</th>
                    <th>Adresse de l'autorité contractante : Quartier</th>
                    <th>Date de dépôt</th>
                    <th>Domaine postulé</th>
                    <th>Prix d'achat du dossier</th>
                    <th>Caution bancaire</th>
                    <th>Résultat</th>
                    <th>Début de prestation</th>
                    <th>Societé</th>
                    <th>Personnel</th>
                    <th class="bg-danger">Actions</th>
                </tr>
            </thead>
            @foreach ($appel_offres as $appel)
                <tr>
                    <td>
                        {{$appel->classement}}
                    </td>
                    <td>
                        {{$appel->adresse_autorite_contractante['ville']}}
                    </td>
                    <td>
                        {{$appel->adresse_autorite_contractante['quartier']}}
                    </td>
                    <td>
                        {{$appel->date_depot}}
                    </td>
                    <td>
                        {{$appel->domaine_postule}}
                    </td>
                    <td>
                        {{$appel->prix_achat_dossier}}
                    </td>
                    <td>
                        {{$appel->caution_bancaire}}
                    </td>
                    <td>
                        {{$appel->resultat}}
                    </td>
                    <td>
                        {{$appel->debut_prestation}}
                    </td>
                    <td>
                        {{$appel->id_societe}}
                    </td>
                    <td>
                        {{$appel->id_personnel}}
                    </td>
                    <td>
                        <div class="d-flex dropdown mr-1">
                            <form action="{{route('appelOffres.show', $appel->id_appel)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Afficher</button>
                            </form>
                        
                            <form action="{{route('appelOffres.destroy', $appel->id_appel)}}" method="post" onsubmit="return AccepterSuppression()">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        
                            <form action="{{route('appelOffres.edit', $appel->id_appel)}}" method="GET">
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
        <form action="{{route('appelOffres.create')}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                @csrf
                <button type="submit" class="btn btn-primary">CRÉER UNE APPEL D'OFFRE</button>
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

    /*sweetAlert(
    {
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!"
    }, 
    deleteIt()
);*/
</script>
@endsection