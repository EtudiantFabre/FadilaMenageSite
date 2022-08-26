@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Affichage de la Personnes à Prevénir</title>
    </head>
    <body>
        <div class="container">
            <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
                <thead class="table-dark">
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Lieu de parenté</th>
                        <th>Candidat</th>
                    </tr>
                </thead>

                <tr>
                    <td>
                        {{$persAprev->id_personne_a_prevenir}}
                    </td>
                    <td>
                        {{$persAprev->nom}}
                    </td>
                    <td>
                        {{$persAprev->prenom}}
                    </td>
                    <td>
                        {{$persAprev->lien_de_parente}}
                    </td>
                    <td>
                        {{$persAprev->candidat['nom']." ".$persAprev->candidat['prenom']}}
                    </td>                    
                </tr>
            </table>
        </div>
        <section>
            <form action="{{route('personneAprevenirs.index')}}">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">J'ai vu</button>
                </div>
            </form>
        </section>
    </body>
    </html>

@endsection