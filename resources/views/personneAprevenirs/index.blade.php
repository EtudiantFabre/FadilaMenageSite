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
                        <th>tel</th>
                        <th>Profession</th>
                        <th>Lien de parenté</th>
                        <th>Candidat</th>
                        <th colspan="3" class="bg-orange" >Opérations</th>
                    </tr>
                </thead>

                @foreach ($persAprev as $personne)
                    <tr>
                        <td>
                            {{$personne->id_personne_aprevenir}}
                        </td>
                        <td>
                            {{$personne->nom}}
                        </td>
                        <td>
                            {{$personne->prenom}}
                        </td>
                        <td>
                            {{$personne->tel}}
                        </td>
                        <td>
                            {{$personne->profession}}
                        </td>
                        <td>
                            {{$personne->lien_de_parente}}
                        </td>
                        <td>
                            {{$personne->candidat['nom']}}
                        </td>
                        <td>
                            <a class="btn btn-success btn-block" href="{{ route('personneAprevenirs.edit', $personne) }}" title="Modifier le personne">Modifier</a>
                        </td>

                        <td>
                            <a class="btn btn-info btn-block" href="{{ route('personneAprevenirs.show', $personne) }}" title="Modifier le personne">Afficher</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('personneAprevenirs.destroy', $personne) }}" >
                                @csrf
                                @method("DELETE")
                                <input class="btn btn-danger btn-block" type="submit" value="Supprimer" >
                            </form>
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
