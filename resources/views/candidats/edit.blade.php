@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v10</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="{{ asset('vendor/date-picker/css/datepicker.min.css') }}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script>
            $(document).ready(function(){
              $("form").submit(function(){
                alert("Submitted");
              });
            });
            </script>

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

	<body>

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

		<!-- JQUERY STEP -->
		<script src="{{ asset('js/jquery.steps.js') }}"></script>

		<!-- DATE-PICKER -->
		<script src="{{ asset('vendor/date-picker/js/datepicker.js') }}"></script>
		<script src="{{ asset('vendor/date-picker/js/datepicker.en.js') }}"></script>


		<script src="{{ asset('js/main.js') }}"></script>
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
                        <i class="zmdi zmdi-home small"></i>
                    </div>

                <!--a class="container fixed-center" href="" style="text-align: center; font-weight: bold; color:#FF5E0E; line-height: 50px;" id="comp-jd97w5lt3label">Candidatez-vous</a-->
                <!--a class="container fixed-left" href="#" style="text-align: left; color:#FF5E0E; font-weight: bold; line-height: 50px;" id="comp-jd97w5lt3label">Nos services</a-->




                </div>
              </div>
            </nav>
          </header>

		<div class="wrapper">
            <!-- Si nous avons un candidat $candidat -->
	        @if (isset($candidat))

            <form method="POST" action="{{ route('candidats.update', $candidat) }}" enctype="multipart/form-data" class="mb-10px" id="wizard">
                <!-- <input type="hidden" name="_method" value="PUT"> -->
		        @method('PUT')

            @else

            <!-- Le formulaire est géré par la route "candidats.store" -->
            <form method="POST" action="{{ route('candidats.store') }}" enctype="multipart/form-data" class="mb-10px" id="wizard">

	        @endif


            @csrf
        		<!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <div class="inner">
                    	<a href="#" class="avartar">
                    		<img src="{{ asset('images/avartar.png') }}" alt="">
                    	</a>
                    	<div class="form-row form-group">
                    		<div class="form-holder">
                    			<input type="text" class="form-control" name="nom" value="{{ isset($candidat->nom) ? $candidat->nom : old('nom') }}"  id="nom" placeholder="Nom" aria-required="true">
                    		</div>
                    		<div class="form-holder">
                    			<input type="text" class="form-control" name="prenom" value="{{ isset($candidat->prenom) ? $candidat->prenom : old('prenom') }}"  id="prenom" placeholder="Prenom" aria-required="true">
                    		</div>
                    	</div>
                    	<div class="form-row">
                    		<div class="form-holder">
                                Date de naissance :	<input type="date" name="date_naissance" value="{{ isset($candidat->date_naissance) ? $candidat->date_naissance : old('date_naissance') }}"  id="date_naissance"  class="form-control" aria-required="true" >

                    		</div>
                    	</div>
                    	<div class="form-row">
                    		<div class="form-holder">
                                <input type="text" name="lieu_naissance" value="{{ isset($candidat->lieu_naissance) ? $candidat->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="Lieu de naissance" class="form-control" riquired>
                    			<i class="zmdi zmdi-flag small"></i>
                    		</div>
                    	</div>
                    	<div class="form-row">
                    		<div class="form-holder">
                                <input class="form-control" type="text" name="telephone" value="{{ isset($candidat->telephone) ? $candidat->telephone : old('telephone') }}"  id="telephone" placeholder="Numéro de téléphone" aria-required="true">
                    			<i class="zmdi zmdi-smartphone-android"></i>
                    		</div>
                    	</div>
                    	<div class="form-row">
                    		<div class="form-holder">
                                <label class="label">Email : </label>
                                <input type="text" name="email" value="{{ isset($candidat->email) ? $candidat->email : old('email') }}"  id="email" placeholder="exemple@gmail.com" class="form-control" aria-required="true">
                                <i class="zmdi zmdi-email small"></i>
                    		</div>
                    	</div>

                    </div>
                </section>

				<!-- SECTION 2 -->
                <h4></h4>
                <section>
                	<div class="inner">
                		<a href="#" class="avartar">
                    		<img src="{{ asset('images/avartar.png') }}" alt="">
                    	</a>
                        <div class="form-row form-group">
                            <div class="form-holder">
                                <input type="text" name="nationalite" value="{{ isset($candidat->nationalite) ? $candidat->nationalite : old('nationalite') }}"  id="nationalite" placeholder="Notionalité" class="form-control" required>
                            </div>
                            <div class="form-row">
                                    <select name="piece_identite" id="piece_identite" class="form-control" required>
                                        <option >Pièce d'identité</option>
                                        <option value="Passport">Passport</option>
                                        <option value="Carte national">Carte national</option>
                                        <option value="Carte d'électeur">Carte d'électeur</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-row">
                    		<div class="form-holder">
                                <input type="text" name="numero_de_piece" value="{{ isset($candidat->numero_de_piece) ? $candidat->numero_de_piece : old('numero_de_piece') }}"  id="numero_de_piece" placeholder="Le numéro de la pièce" class="form-control" >
                    		</div>
                    	</div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="date" class="form-control datepicker-here" name="date_delivrer" value="{{ isset($candidat->date_delivrer) ? $candidat->date_delivrer : old('date_delivrer') }}"  id="date_delivrer" placeholder="date délivrance">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="date" name="date_expiration" class="form-control" value="{{ isset($candidat->date_expiration) ? $candidat->date_expiration : old('date_expiration') }}"  id="date_expiration" placeholder="date d'expiration">
                            </div>
                        </div>

                        <div class="form-row form-group">
                            <div class="form-holder">
                                <input type="text" name="ville_residence" value="{{ isset($candidat->ville_residence) ? $candidat->ville_residence : old('ville_residence') }}"  id="ville_residence" placeholder="Votre ville de résidence" class="form-control">
                                <i class="zmdi zmdi-home small"></i>
                            </div>
                            <div class="form-holder">
                                <input type="text" name="quartier" value="{{ isset($candidat->quartier) ? $candidat->quartier : old('quartier') }}"  id="Votre quartier" placeholder="Quartier" class="form-control">
                                <i class="zmdi zmdi-bookmark small"></i>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="form-holder">
                                <input type="text" name="rue" value="{{ isset($candidat->rue) ? $candidat->rue : old('rue') }}"  id="rue" placeholder="Rue" class="form-control">
                                <i class="zmdi zmdi-city-alt small"></i>
                            </div>
                            <div class="form-holder">
                                <i class="zmdi zmdi-caret-down small"></i>
                                <select name="genre" id="genre" class="form-control" required>
                                    <option>Genre</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                        </div>
                	</div>
                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section class="section-3">
                    <div class="inner">
                		<a href="#" class="avartar">
                    		<img src="{{ asset('images/avartar.png') }}" alt="">
                    	</a>
                        <div class="form-holder">
                            <div class="form-row">
                                <i class="zmdi zmdi-caret-down small"></i>
                                <select name="situation_familiale" id="situation_familiale" class="form-control" required>
                                    <option >Situation matrimonial</option>
                                    <option value="Marié">Marié</option>
                                    <option value="Célibataire">Célibataire</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="form-row form-group">
                            <div class="form-holder">
                                <input class="form-control" type="number" name="enfants_encharge" value="{{ isset($candidat->enfants_encharge) ? $candidat->enfants_encharge : old('enfants_encharge') }}"  id="enfants_encharge" placeholder="Nombre d'enfants">
                            </div>
                            <div class="form-holder">
                                    <select name="disponible_a_loger" id="disponible_a_loger" class="form-control">
                                        <option>Disponible à loger</option>
                                        <option value="Oui">Oui</option>
                                        <option value="Non">Non</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-row form-group">
                    		<div class="form-holder">
                                <input class="form-control" type="text" name="profession" value="{{ isset($candidat->profession) ? $candidat->profession : old('profession') }}"  id="profession" placeholder="Votre profession actuelle" aria-required="true">
                    		</div>
                            <div class="form-holder">
                                    <select name="poste_candidate" id="poste_candidate" class="form-control">
                                        <option>Poste candidaté</option>
                                        <option value="Chauffeur">Chauffeur</option>
                                        <option value="Nounou">Nounou</option>
                                        <option value="Agent d'entretient">Agent d'entretient</option>
                                        <option value="Cuisinier(e)">Cuisinier(e)</option>
                                        <option value="Menagère">Menagère</option>
                                    </select>
                            </div>
                    	</div>
                        <div class="form-row">
                            @if(isset($candidat->avatar))
                            <div class="form-holder">
                                <span>Photo actuelle</span>
                                <img src="{{ asset('storage/'.$candidat->avatar) }}" alt="photo" style="max-height: 70px;" >
                            </div>
                            @endif
                            <div class="form-holder">
                                <span>Votre photo</span>
                                <input class="form-control" type="file" name="avatar"  id="avatar" action="/upload" aria-required="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <textarea class="form-control" name="objectif" id="objectif"  placeholder="L'objectif de votre candidature" aria-required="true">{{ isset($candidat->objectif) ? $candidat->objectif : old('objectif') }}</textarea>
                            </div>
                        </div>
                	</div>
                </section>

                <!-- SECTION 4 -->
                <h4></h4>
                <section class="section-4">
                    <div class="inner">
                		<a href="#" class="avartar">
                    		<img src="{{ asset('images/avartar.png') }}" alt="">
                    	</a>
                        <div class="form-row form-group">
                            <div class="form-holder">
                                <input class="form-control" type="text" name="niveau_etude" value="{{ isset($candidat->niveau_etude) ? $candidat->niveau_etude : old('niveau_etude') }}"  id="niveau_etude" placeholder="Niveau d'étude" aria-required="false">
                                <i class="zmdi zmdi-graduation-cap small"></i>
                            </div>
                            <div class="form-holder">
                                <input class="form-control" type="number" name="pretention_salarial" value="{{ isset($candidat->pretention_salarial) ? $candidat->pretention_salarial : old('pretention_salarial') }}"  id="pretention_salarial" placeholder="Prétention salarial" aria-required="true">
                                <i class="zmdi zmdi-plaster small"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <select name="nature_contrat" id="nature_contrat" class="form-control">
                                <option>Nature Contrat</option>
                                <option value="CDD">CDD</option>
                                <option value="CDI">CDI</option>
                                <option value="Autre">Autre</option>
                            </select>

                        </div>
                        <div class="form-row">
                            <select name="horaire_travail_souhaite" id="horaire_travail_souhaite" class="form-control">
                                <option>Horaire de travail souhaité</option>
                                <option value="Temps plein">Temps plein</option>
                                <option value="Temps poyenne">Temps moyenne</option>
                                <option value="Mis temps">Mis temps</option>
                                <option value="Mis temps">Autre</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <select name="horaire_travail_passe" id="horaire_travail_passe" class="form-control">
                                <option>Horaire de travail passé</option>
                                <option value="Temps plein">Temps plein</option>
                                <option value="Temps poyenne">Temps moyenne</option>
                                <option value="Mis temps">Mis temps</option>
                                <option value="Mis temps">Autre</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <textarea class="form-control" name="qualite_personnelles" id="qualite_personnelles"  placeholder="vos qualités personnel" >{{ isset($candidat->qualite_personnelles) ? $candidat->qualite_personnelles : old('qualite_personnelles') }}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <textarea class="form-control" name="savoir_faire" id="savoir_faire"  placeholder="Qu'est ce que vous savez faire d'autre" >{{ isset($candidat->savoir_faire) ? $candidat->savoir_faire : old('savoir_faire') }}</textarea>
                            </div>
                        </div>
                	</div>
                </section>
                @if ( ! isset($candidat))

                <!-- SECTION 5 -->
                <h4></h4>
                <section class="section-4">
                    <div class="inner">
                		<a href="#" class="avartar">
                    		<img src="{{ asset('images/avartar.png') }}" alt="">
                    	</a>
                        <h5 class="text-center" >Avez vous déjà d'expériences ?</h5><br><br>

                        <div class="form-row form-group">
                            <div class="form-holder">
                                <div class="form-radio-item">
                                    <input type="radio" class="form-check-input"  name="experience" id="experience_oui"  value="OUI" required>
                                    <label for="experience">OUI</label>
                            </div>
                            </div>
                            <div class="form-holder">
                                <div class="form-radio-item">
                                    <input type="radio" class="form-check-input" name="experience" id="experience_non" value="NON" required>
                                    <label for="pasexperience">NON</label>
                                </div>
                            </div>
                        </div>
                            <!--button type="submit" name="valider"  class="btn btn-info btn-block form-control ">Suivant</button-->

                                <button type="button" class="btn btn-info btn-block form-control" data-bs-toggle="modal" data-bs-target="#myModal">Suivant</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-justify" style="font-size: 3ch">Salut  Mr/Mme Félicitation votre candidature vas être prise en compte vous aurez bésoin de votre numéro de confirmation pour consultez votre candidature après veuillez le noté en un lieu sûr avant de cliquez sur OK</p>
                                            </div>

                                            <p style="color: #FF5E0E; font-size: 3ch;">Date : {{ date("l jS \of F Y ") }}</p>
                                            <p style="color: #FF5E0E; font-size: 3ch;">Time : {{ date("h:i:s  A") }}</p>
                                            <p style="color: #FF5E0E; font-size: 3ch;">Numéro de confirmation : {{ date("jSYhis") }}</p>

                                            <div class="modal-footer">
                                                <input class="btn btn-info btn-block form-control" type="submit" value="OK" class="submit" name="submit" id="submit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
                        @endif
                </section>

                @if (isset($candidat))
                    <button type="submit" name="valider" class="btn btn-info btn-block ">Mettre à jour</button>
                @endif

            </form>
		</div>

    </body>
</html>
@endsection
