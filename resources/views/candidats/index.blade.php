@extends("layout")
@section("title", "Liste des candidats")
@section("content")


<div class="container rounded-4  shadow-lg p-3 mb-5 bg-div">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Liste des candidats
                        <a href="{{ route('candidats.create') }}" title="Créer un candidat" class="btn btn-primary float-end">Enregistrer un candidat</a>
                    </h4>

                </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Dante de Naissance</th>
                                <th>Lieu de naissance</th>
                                <th>Genre</th>
                                <th>Nationalité</th>
                                <th>Photo</th>
                                <th colspan="3" >Opérations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- On parcourt la collection de candidat -->
                            @foreach ($candidats as $candidat)
                                <tr>
                                    <td>
                                        {{ $candidat->id_candidat}}
                                    </td>
                                    <td>
                                        {{ $candidat->nom}}
                                    </td>
                                    <td>
                                        {{ $candidat->prenom}}
                                    </td>
                                    <td>
                                        {{ $candidat->date_naissance}}
                                    </td>
                                    <td>
                                        {{ $candidat->lieu_naissance}}
                                    </td>
                                    <td>
                                        {{ $candidat->genre}}
                                    </td>
                                    <td>
                                        {{ $candidat->nationalite}}
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/'.$candidat->avatar)}}" width="70px" height="70px" alt="Photo" >

                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-block" href="{{ route('candidats.show', $candidat) }}" title="Afficher le candidat" >Afficher</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-block" href="{{ route('candidats.edit', $candidat) }}" title="Modifier la candidature" >Modifier</a>
                                    </td>

                                    <td>
                                        <form method="POST" action="{{ route('candidats.destroy', $candidat) }}" >
                                            <!-- CSRF token -->
                                            @csrf
                                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                            @method("DELETE")
                                            <input class="btn btn-danger btn-block" type="submit" value="Supprimer" >
                                        </form>
                                    </td>
                             </tr>
                          @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection

