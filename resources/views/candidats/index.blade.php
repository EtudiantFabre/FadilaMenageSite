@extends("layout")
@section("title", "Liste des candidats")
<header>

@section("content")



<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/Original_on_Transparent.png" style="width: 200px; height: 50px;" alt="FADILA MÉNAGE"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="container">
              <a href="{{ url('/') }}" class="container fixed-right text-uppercase" style="text-align: right; font-weight: bold; color:#FF5E0E;">Accueil</a>
              <span><i class="zmdi zmdi-home small"></i></span>
          </div>

            <a href="{{ route('candidats.create') }}"  class="btn  float-end text-uppercase me-6" style=" font-weight: bold; color:#FF5E0E;">Enregistrer un candidat</a>

      </div>
    </div>
  </nav>
</header>
    <div class="row shadow-lg p-3 mb-5 bg-div ms-6 mt-6 me-6">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #FF5E0E">
                    <h4 class="text-center text-uppercase " style=" font-weight: bold; color:white;" >Liste des candidats</h4>
                </div>
            <div class="card-body">
                <table class="table table-bordered  text-center">
                        <thead class="text-align: center">
                            <tr style=" font-weight: bold" class="text-center text-uppercase">
                                <th class=" text-uppercase">Numero</th>
                                <th class=" text-uppercase">Nom</th>
                                <th class=" text-uppercase">Prénom</th>
                                <th class=" text-uppercase">Dante de Naissance</th>
                                <th class=" text-uppercase">Lieu de naissance</th>
                                <th class=" text-uppercase">Genre</th>
                                <th class=" text-uppercase">Poste candidaté</th>
                                <th class=" text-uppercase">Photo</th>
                                <th colspan="3" class=" text-uppercase">Opérations</th>
                            </tr>
                        </thead>
                        <tbody class="text-align: center">
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
                                        {{ $candidat->poste_candidate}}
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/'.$candidat->avatar)}}" width="70px" height="70px" alt="Photo" >
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-block" href="{{ route('candidats.show', $candidat) }}" >Afficher plus</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-block" href="" title="Modifier la candidature">Metre en attente</a>
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

@endsection

<footer class="container">
    <p class="text-center">&copy; 2017–2022 Compagnie, Inc. &middot; <a href="#">Privé</a> &middot; <a href="/">gofadila.com</a></p>
</footer>
