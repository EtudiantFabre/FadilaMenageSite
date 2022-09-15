@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listes des Personnes à Prevénir</title>
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
                        <th class="bg-danger">Actions</th>
                    </tr>
                </thead>

                @foreach ($persAprev as $personne)
                    <tr>
                        <td>
                            {{$personne->id_personne_a_prevenir}}
                        </td>
                        <td>
                            {{$personne->nom}}
                        </td>
                        <td>
                            {{$personne->prenom}}
                        </td>
                        <td>
                            {{$personne->lien_de_parente}}
                        </td>
                        <td>
                            {{$personne->candidat['nom']}}
                        </td>
                        <td>
                            <div class="d-flex dropdown mr-1">
                                <form action="{{route('personneAprevenirs.show', $personne->id_personne_a_prevenir)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">Afficher</button>
                                </form>
                            
                                <form action="{{route('personneAprevenirs.destroy', $personne->id_personne_a_prevenir)}}" method="post" onsubmit="return AccepterSuppression()">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                </form>
                            
                                <form action="{{route('personneAprevenirs.edit', $personne->id_personne_a_prevenir)}}" method="GET">
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
            <form action="{{route('personneAprevenirs.create')}}">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">CRÉER UNE PERSONNE À PREVENIR</button>
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