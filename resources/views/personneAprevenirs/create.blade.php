<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Personne à prevenir</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
    .modal-header {
        background: #F7941E;
        color: #fff;
    }

    .required:after {
        content: "*";
        color: red;
    }
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">Finaleser votre candidature</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Personne à prevenire</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('personneAprevenirs.store')}}" method="POST">
                @csrf
                @method('post')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le du personne à prevenir">
                  </div>
                  <div class="form-group">
                    <label for="prenom"> Prenom :</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom de personne à prevenir">
                  </div>
                  <div class="form-group">
                    <label for="tel"> Téléphne :</label>
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="Numéro de personne à prevenir">
                  </div>
                  <div class="form-group">
                    <label for="quartier"> Quartier :</label>
                    <input type="text" name="quartier" class="form-control" id="quartier" placeholder="quartier de personne à prevenir">
                  </div>
                  <div class="form-group">
                    <label for="profession"> Profession :</label>
                    <input type="text" name="profession" class="form-control" id="profession" placeholder="profession de personne à prevenire">
                  </div>
                  <div class="form-group">
                    <label for="lien_de_parente"> Lien de parenté :</label>
                    <input type="text" name="lien_de_parente" class="form-control" id="lien_de_parente" placeholder="Votre lien de parenté">
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="id_candidat" value="{{$last->id_candidat}}" name="id_candidat">
                  </div>

                </div>
                <button type="button" class="btn btn-info btn-block form-control" data-bs-toggle="modal" data-bs-target="#myModal">Suivant</button>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirmation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        @if ($last->genre == 'Homme')
                                            <div class="modal-body">
                                                <p class="text-justify" style="font-size: 3ch">Salut {{ 'Monsieur'.' '.$last->nom.' '.$last->prenom}}  votre candidature au poste de {{ $last->poste_candidate }} vas être prise en compte vous aurez bésoin de votre numéro de confirmation pour consultez votre candidature après veuillez le noté en un lieu sûr avant de cliquez sur OK</p>
                                            </div>
                                        @else
                                        <div class="modal-body">
                                            <p class="text-justify" style="font-size: 3ch">Salut {{ 'Madame'.' '.$last->nom.' '.$last->prenom}}  votre candidature au poste de {{ $last->poste_candidate }} vas être prise en compte vous aurez bésoin de votre numéro de confirmation pour consultez votre candidature après veuillez le noté en un lieu sûr avant de cliquez sur OK</p>
                                        </div>
                                        @endif
                                        <p style="color: #FF5E0E; font-size: 3ch;">Date : {{ date("l jS \of F Y ") }}</p>
                                        <p style="color: #FF5E0E; font-size: 3ch;">Time : {{ date("h:i:s A") }}</p>
                                        <p style="color: #FF5E0E; font-size: 3ch;">Numéro de confirmation : {{ $last->id_candidat.date("jSYhis") }}</p>

                                        <div class="modal-footer">
                                            <input class="btn btn-info btn-block form-control" type="submit" value="OK" class="submit" name="submit" id="submit" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

                <!-- /.card-body -->

                <!--div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div-->
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
