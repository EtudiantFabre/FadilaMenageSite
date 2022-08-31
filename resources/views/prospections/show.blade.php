@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prospection</title>
</head>
<body>
    <div class="container">
        <h1>Voici la prospection N° {{$prospection->id_prospection}}</h1>
        <table class="table table-dange table-hover table-striped table-bordered border-primary text-center justify-content-center">
            <thead class="table-dark">
                <tr>
                    <th>Raison social</th>
                    <th>Date</th>
                    <th>Canal</th>
                    <th>Compétence recherché</th>
                    <th>Type de maison</th>
                    <th>Nombre de chambre</th>
                    <th>Nombre de WC douche</th>
                    <th>Taille de la famille</th>
                    <th>Budget</th>
                    <th>Actions menées</th>
                    <th>Conclusion</th>
                    <th>Agent sélectionné</th>
                    <th>Client sélectionné</th>
                    <th>Facture sélectionné</th>
                </tr>
            </thead>

            <tr>
                <td>
                    {{$prospection->raison_social}}
                </td>
                <td>
                    {{$prospection->date}}
                </td>
                <td>
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
                </td>
                <td>
                    {{$prospection->id_agent}}
                </td>
                <td>
                    {{$prospection->id_client}}
                </td>
                <td>
                    {{$prospection->id_facture}}
                </td>
            </tr>
        </table>

        <div>
            <form action="{{route('prospections.index')}}">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">J'ai vu</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

@endsection