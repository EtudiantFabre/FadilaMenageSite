@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/creerUnClient.boostrap.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/creerUnClient.style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    <style>
        .input-group .intl-tel-input .form-control {
            border-top-left-radius: 4px;
            border-top-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 0;
        }
        // workaround
        .intl-tel-input {
        display: table-cell;
        }
        .intl-tel-input .selected-flag {
        z-index: 4;
        }
        .intl-tel-input .country-list {
        z-index: 5;
        }
    </style>

    <script>
        $("input").intlTelInput({
            utilsScript: "https://<cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
        });
    </script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar w/ text</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                </ul>
                <span class="navbar-text">
                  Navbar text with an inline element
                </span>
              </div>
            </div>
          </nav>
    </header>

    <main>
        <div id="booking" class="section">
            <div class="section-center" id="#">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-push-5">
                            <div class="booking-cta" >
                                <h1 style="color: #FF5E0E">DEMANDE DE SERVICE</h1>
                                <p style="color: #FF5E0E">Pour que nous vous trouvions un agent adéquat, nous avons bésoin de quelque information vous concernant</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-pull-7">
                            <div class="booking-form">
                                <form method="POST" action="{{ route('liste.agents') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("post")
                                    <div class="form-group">
                                        <h6>Votre nom<span class="text-danger required" aria-hidden="true">*</span></h6>
                                        <input class="form-control" name="nom" id="nom" type="text" placeholder="Entrer votre nom">
                                        @error("nom")
                                            <div class="text-danger required">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <h6>Votre numéro de télephone<span class="text-danger required" aria-hidden="true">*</span></h6>
                                        <div class="input-group">
                                            <span class="input-group-addon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                              </svg></span>
                                            <input type="tel" name="tel" id="tel" class="form-control">
                                        </div>
                                        @error("tel")
                                            <div class="text-danger required">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <h6>Ville<span class="text-danger required" aria-hidden="true">*</span></h6>
                                                <input class="form-control" name="ville" id="ville" type="text" placeholder="Ville">
                                                @error("ville")
                                                    <div class="text-danger required">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <h6>Quartier<span class="text-danger required" aria-hidden="true">*</span></h6>
                                                <input class="form-control" type="text" name="quartier" id="quartier" placeholder="Quartier">
                                                @error("quartier")
                                                <div class="text-danger required">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h6>Adresse email<span class="text-danger required" aria-hidden="true">*</span></h6>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Exemple : google@gmail.com"/>
                                    </div>
                                    <div class="form-group">
                                        <h6 for="type_service_rechercher" >Quel type de services rechercer vous ?<span class="text-danger required" aria-hidden="true">*</span></h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type_service_rechercher"  id="inlineRadio1" value="NOUNOU">
                                            <label class="form-check-label" for="inlineRadio1">NOUNOU</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="CUISINIER">
                                            <label class="form-check-label" for="inlineRadio2">CUISINIER</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="ENTRETIEN">
                                            <label class="form-check-label" for="inlineRadio2">NETOYAGE ET ENTRETIEN</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="CHAUFFEUR">
                                            <label class="form-check-label" for="inlineRadio2">CHAUFFEUR</label>
                                        </div>
                                        <!--div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type_service_rechercher" id="inlineRadio2" value="Conception de pannier cadeau">
                                            <label class="form-check-label" for="inlineRadio2">Conception de pannier cadeau</label>
                                        </div-->
                                        <!-- Le message d'erreur pour "type_service_rechercher" -->
                                        @error("type_service_rechercher")
                                            <div class="text-danger required">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <h6 for="frequence_souhaiter" >Frequence souhaité<span class="text-danger required" aria-hidden="true">*</span></h6>

                                        <input class="form-control" type="number" name="frequence_souhaiter" value="{{ isset($client->frequence_souhaiter) ? $client->frequence_souhaiter : old('frequence_souhaiter') }}"  id="frequence_souhaiter" placeholder="Fréquence souhaité" >

                                        <!-- Le message d'erreur pour "frequence_souhaiter" -->
                                        @error("frequence_souhaiter")
                                            <div class="text-danger required">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>

                                    <div class="form-btn">
                                        <button class="submit-btn" type="submit">Continuer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="container">
        <p class="float-end"><a href="#">Retour au sommet</a></p>
    </footer>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>


@endsection
