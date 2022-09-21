@extends('admin')

@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Liste des candidats</h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body pb-0">
            <div class="row">
              @foreach ($candidats as $candidat)
              <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                   {{$candidat->poste_candidate}}
                  </div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col-7">
                        <h2 class="lead"><b>{{ $candidat->nom.' '.$candidat->prenom }}</b></h2>
                        <p class="text-muted text-sm" style="color:#FF5E0E"><b>Prétention salarial: </b> {{ $candidat->pretention_salarial }} </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Addresse: Rue:{{ $candidat->rue }}, Ville:{{ $candidat->ville_residence }} quartier:{{ $candidat->quartier }}</li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : {{ $candidat->telephone }}</li>
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                        <img src="{{ asset('storage/'.$candidat->avatar)}}" alt="user-avatar" class="img-circle img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">
                      <a href="#" class="btn btn-sm bg-teal">
                        <i class="fas fa-comments"></i>
                      </a>
                      <a href="{{ route('candidats.show', $candidat) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> Voir CV
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
       </div>
      </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
              <ul class="pagination justify-content-center m-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.card-footer -->

        <!-- /.card -->

      </section>
      <!-- /.content -->

    <!-- /.content-wrapper -->
@endsection
