@extends("layout")
@section("title", "Experience du candidat")
@section("content")
<div class="container">
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#myModal">Ajouter vos expériences</button>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajoutez vos expériences</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('experienceDuCandidats.store') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="mb-3">
                            <label class="form-label required" for="nbr_annee_experience">Nombre d'année d'expérience :</label>

                            <input type="number" class="form-control" name="nbr_annee_experience" required>
                        </div>

                        @foreach ($last_row as $last)

                                @if($last->poste_candidate == 'Chauffeur')

                                    <div class="mb-3">
                                        <label for="nbr_voiture_conduit" class="form-label required">Nombre de voituer conduit :</label>
                                        <input type="number" class="form-control" name="nbr_voiture_conduit" placeholder="nombre de voiture que vous avez déjà conduit" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label required" for="type_voiture">Type de voiture :</label>
                                        <input type="text" class="form-control" name="type_voiture" placeholder="exemple : Manuelle" required>
                                    </div>

                                 @elseif($last->poste_candidate == 'Nounou')

                                    <div class="mb-3">
                                        <label class="form-label required" for="nombre_enfants_garde">Nombre d'enfants gardé :</label>
                                        <input type="text" class="form-control" name="nombre_enfants_garde" placeholder="Nombre d'enfants gardé dernièrement" required>
                                    </div>

                                 @endif

                        @endforeach

                        <div class="mb-3">
                            <label class="form-label" for="type_contrat" >Type de contrat :</label>
                            <select name="type_contrat" id="type_contrat" class="form-control">
                                <option>Nature Contrat</option>
                                <option value="CDD">CDD</option>
                                <option value="CDI">CDI</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label " for="adresse_societe" >Adresse de votre derniér employeur :</label>
                            <input type="text" class="form-control" name="nom_employeur" placeholder="Nom de la société ou employeur">
                            <input type="text" class="form-control" name="numero_employeur" placeholder="Contact">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required" for="dernier_salaire" >Votre dernier salaire:</label>
                            <input type="text" class="form-control" name="dernier_salaire" placeholder="La somme qu'on vous peyait">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="date_demission" >Date de démission  :</label>
                            <input type="date" class="form-control" name="date_demission" placeholder="La date où vous avez laissé votre encient travial">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn-close btn btn-danger">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endsection
