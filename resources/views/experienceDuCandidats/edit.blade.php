
@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Expériences</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/stylexperience.css') }}">
    <style>
        .modal-header {
            background: #FF5E0E;
            color: #fff;
        }

    </style>
</head>

<body>


    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('images/signup-img.jpg') }}" alt="">
                </div>
                <div class="signup-form">
                    @if (isset($experienceDuCandidat))

                        <form method="POST" class="register-form" action="{{ route('experienceDuCandidats.update') }}" enctype="multipart/form-data">
                            @method('PUT')
                    @else
                        <form method="POST" class="register-form" action="{{ route('experienceDuCandidats.store') }}" enctype="multipart/form-data">
                    @endif

                    @csrf
                        <h3 class="text-justify text-uppercase" style="color: #FF5E0E">Répondez juste à quelques questions afin que nous puissions personnaliser la bonne expérience pour vous.</h3><br>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label required"  for="nbr_annee_experience">Nombre d'année d'expérience :</label>
                                <input type="number" name="nbr_annee_experience" value="{{ isset($experienceDuCandidat->nbr_annee_experience) ? $experienceDuCandidat->nbr_annee_experience : old('nbr_annee_experience') }}"  id="nbr_annee_experience" required/>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="type_contrat" >Type de contrat :</label>
                                <div class="form-select">
                                    <select name="type_contrat">
                                        <option>Nature Contrat</option>
                                        <option value="CDD">CDD</option>
                                        <option value="CDI">CDI</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="adresse_societe" >Adresse de votre dernier employeur :</label>
                            <input type="text" name="nom_employeur" value="{{ isset($experienceDuCandidat->nom_employeur) ? $experienceDuCandidat->nom_employeur : old('nom_employeur') }}"  id="nom_employeur" placeholder="Nom de la société ou Employeur"/>
                            <input type="text" name="numero_employeur" value="{{ isset($experienceDuCandidat->numero_employeur) ? $experienceDuCandidat->numero_employeur : old('numero_employeur') }}"  id="numero_employeur" placeholder="Contact de votre dernier employeur"  required/>
                        </div>

                                @if($last->poste_candidate == 'CHAUFFEUR')
                                    <div class="form-group">
                                        <label for="nbr_voiture_conduit" class="form-label required">Nombre de voituer conduit :</label>
                                        <input type="number" name="nbr_voiture_conduit" value="{{ isset($experienceDuCandidat->nbr_voiture_conduit) ? $experienceDuCandidat->nbr_voiture_conduit : old('nbr_voiture_conduit') }}"  id="nbr_voiture_conduit"   required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label required" for="type_voiture">Type de voiture :</label>
                                        <input type="text" name="type_voiture" value="{{ isset($experienceDuCandidat->type_voiture) ? $experienceDuCandidat->type_voiture : old('type_voiture') }}"  id="type_voiture" placeholder="Example Automatique" required/>
                                    </div>
                                @elseif($last->poste_candidate == 'NOUNOU')
                                    <div class="form-group">
                                        <label class="form-label required" for="nombre_enfants_garde">Nombre d'enfants gardé :</label>
                                        <input type="number" name="nombre_enfants_garde" value="{{ isset($experienceDuCandidat->nombre_enfants_garde) ? $experienceDuCandidat->nombre_enfants_garde : old('nombre_enfants_garde') }}"  id="nombre_enfants_garde" required/>
                                    </div>
                                @endif


                        <div class="form-group">
                            <label for="date_demission" class="form-label required">Date de demission de votre dernier travail :</label>
                            <input type="date" name="date_demission" value="{{ isset($experienceDuCandidat->date_demission) ? $experienceDuCandidat->date_demission : old('date_demission') }}"  id="date_demission"/>
                        </div>
                        <div class="form-group">
                            <label for="dernier_salaire" class="form-label required">Votre dernier salaire:</label>
                            <input type="number" name="dernier_salaire" value="{{ isset($experienceDuCandidat->dernier_salaire) ? $experienceDuCandidat->dernier_salaire : old('dernier_salaire') }}"  id="dernier_salaire" placeholder="La somme que vous prenait"  />
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="candidat" value="{{$last->id_candidat}}"  id="candidat"/>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
@endsection
