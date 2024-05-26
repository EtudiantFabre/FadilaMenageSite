@extends('layouts.app')
@section('content')
<?php
    /*$text = $_GET['terme'];
    $valider = $_GET['valider'];
    
    if (isset($valider) && !empty(trim($text)))
    {
        print_r("Sa marche pas");
        $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les failles html
        $terme = $_GET["terme"];
        $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
        $terme = strip_tags($terme);

        $table = rechercherAgent($terme);
        foreach ($table as $terme_trouve){
            //echo "<option value=".$terme_trouve['nom']." ".$terme_trouve['prenom'].">".$terme_trouve['nom']." ".$terme_trouve['prenom']."</option>";
            echo "$terme_trouve";
        }
    }*/
                            
                        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d'un suivi</title>
    <!-- Fonts -->
    
</head>
<body>
    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
        <h1 class="text-center">Création d'un suivi</h1>
        <form action="{{route('suivis.store')}}" method="POST">
            {{ csrf_field() }}
            @csrf
            @method('post')

            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        
            <div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date de passage<span class="text-danger required" aria-hidden="true">*</span></span>
                    <input type="date" id="date_passage" name="date_passage" class="form-control">
                </div>
                <br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Heure de passage <span class="text-danger required" aria-hidden="true">*</span></span>
                    <input type="time" id="heure_passage" name="heure_passage" min="07:30" max="18:00" required class="form-control">
                </div>
                <br>
                <div>
                    Accès a la résidence du client <span class="text-danger required" aria-hidden="true">*</span>:
                    <select name="acces_residence" class="form-select form-select-lg" id="acces_residence">
                        <option value="Vrai">Vrai</option>
                        <option value="Faux">Faux</option>
                    </select>
                </div>
                <br>
                <div>
                    Verification et signature du registre de présence de l'agent <span class="text-danger required" aria-hidden="true">*</span>
                    <select name="verif_presence_agent" id="verif_presence_agent" class="form-select form-select-lg">
                        <option value="Vrai">Vrai</option>
                        <option value="Faux">Faux</option>
                    </select>
                </div>
                <br>
                <div>
                    Présence de l'agent <span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="presence_agent" id="presence_agentss" class="form-select form-select-lg mb-3">
                        <option value="Vrai">Vrai</option>
                        <option value="Faux">Faux</option>
                    </select>
                </div>
                <br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Heure d'arrivé de l'agent <span class="text-danger required" aria-hidden="true">*</span></span>
                    <input type="time" id="heure_arrive_agent" name="heure_arrive_agent" min="06:30" max="18:00" required class="form-control" >
                </div>
                <br>
                <div>
                    <label for="pres_corporel_vestimentaire">
                        Présentation corporelle et vestimentaire <span class="text-danger required" aria-hidden="true">*</span> : 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                    </label>
                </div>
                <br>
                <div>
                    <label for="entretient_plafond">
                        Entretien des plafonds<span class="text-danger required" aria-hidden="true">*</span> :
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_plafond" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_plafond" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_plafond" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                    </label>
                </div>
                <br>
                <div>
                    <label for="essuyage_vitre">
                        Essuyage des vitres / Nacos / Fenêtre / Portes<span class="text-danger required" aria-hidden="true">*</span> :
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                        <!--input type="checkbox" id="Insatisfait" name="entretient_plafond"/>
                        <label for="Insatisfait">Insatisfait</label>
                        <input type="checkbox" id="Moyen" name="entretient_plafond">
                        <label for="Moyen">Moyen</label>
                        <input type="checkbox" id="Satisfait" name="entretient_plafond">
                        <label for="Satisfait">Satisfait</label-->
                    </label>
                </div>
                <br>
                <div>
                    <label for="depousierage_appareil">
                        Dépousièrage des appareils électroniques<span class="text-danger required" aria-hidden="true">*</span> : 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="depousierage_appareil" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="depousierage_appareil" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="depousierage_appareil" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                    </label>
                </div>
                <br>
                <div>
                    <label for="depousierage_meuble">
                        Dépousièrage des meubles<span class="text-danger required" aria-hidden="true">*</span> : 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="depousierage_meuble" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="depousierage_meuble" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="depousierage_meuble" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                    </label>
                </div>
                <br>
                <div>
                    <label for="entretient_corbeil">
                        Vidage et entretien des corbeilles<span class="text-danger required" aria-hidden="true">*</span> : 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_corbeil" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_corbeil" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_corbeil" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                    </label>
                </div>
                <br>
                <div>
                    <label for="entretient_sanitaire">
                        Entretien des sanitaires<span class="text-danger required" aria-hidden="true">*</span> : 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_sanitaire" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_sanitaire" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="entretient_sanitaire" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                    </label>
                </div>

                <!--div class='modal' tabindex='-1'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title'>Modal title</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                <p>Modal body text goes here.</p>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                            </div>
                        </div>
                    </div>
                </div-->
                <br>
                <div>
                    <label for="balayage_netoyage_sol">
                        Balayage et netoyage du sol<span class="text-danger required" aria-hidden="true">*</span> : 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="balayage_netoyage_sol" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="balayage_netoyage_sol" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="balayage_netoyage_sol" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                    </label>
                </div>
                <br>
                <div>
                    <label for="repassage">
                        Repassage du linge<span class="text-danger required" aria-hidden="true">*</span> : 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="repassage" id="inlineRadio1" value="Insatisfait">
                            <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="repassage" id="inlineRadio2" value="Moyen">
                            <label class="form-check-label" for="inlineRadio2">Moyen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="repassage" id="inlineRadio3" value="Satisfait">
                            <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                        </div>
                    </label>
                </div>
                <br>
                <div>
                    <label for="">Sélectionner l'agent de suivi<span class="text-danger required" aria-hidden="true">*</span> :
                        <select name="id_personnel" class="form-control" size="3" aria-label="size 3 select example">>
                            <!--option selected>-- Personnel --</option-->
                            @foreach ($personnels as $unPersonnel)
                                <option value={{$unPersonnel['id_personnel']}}>{{$unPersonnel['id_personnel']}} 👉️ {{$unPersonnel['nom'].' '.$unPersonnel['prenom']}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <br>
                <div>
                    <label for="">Sélectionner l'agent suivi<span class="text-danger required" aria-hidden="true">*</span> :
                        <select name="id_agent" class="form-control" size="3" aria-label="size 3 select example">>
                            <!--option selected>-- Personnel --</option-->
                            @foreach ($agents as $unAgent)
                                <option value={{$unAgent['id_agent']}}>{{$unAgent['id_agent']}} 👉️ {{$unAgent['nom'].' '.$unAgent['prenom']}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <br>
                <div class="form-floating" >
                    Autres traveaux (ceci est optionnel):
                    <textarea class="form-control" placeholder="Pricisez si vous avez" id="floatingTextarea2" style="height: 100px" name="autres_traveaux"></textarea>
                </div>
                <br>
                <div class="form-floating" >
                    Problème (ceci est optionnel):
                    <textarea class="form-control" placeholder="Pricisez si vous avez" id="floatingTextarea2" style="height: 100px" name="probleme"></textarea>
                </div> 
                <br>
                <div class="form-floating" >
                    Commentaire (ceci est optionnel):
                    <textarea class="form-control" placeholder="Pricisez si vous avez" id="floatingTextarea2" style="height: 100px" name="commentaire"></textarea>
                </div>            
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="ENREGISTRER LE SUIVI"/>
            </div>
        </form>
    </div>
</body>
</html>

<script>
    function getValue(){
        len nom = document.getElementById('terme').value;
        alert(nom);
        //return nom;
    }
</script>
@endsection