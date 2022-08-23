@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification de suivi</title>
</head>
<body>
    <div class="container">
        <h1>Modification de suivi</h1>
        <form action="{{route('suivis.update', $suivi)}}" method="POST">
            {{ csrf_field() }}
            @method('put')
            <div class="container">
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
                <div>
                    <label for="">
                        Date de passage : <input type="date" id="date_passage" name="date_passage" value="{{$suivi->date_passage}}">
                    </label>
                </div>
                <div>
                    <label for="">
                        Heure de passage : <input type="time" id="heure_passage" name="heure_passage" min="07:30" max="18:00" value="{{$suivi->heure_passage}}">
                    </label>
                </div>
                <div>
                    <label for="">
                        Accès a la résidence du client :
                        <select name="acces_residence" id="acces_residence">
                            @if ($suivi->acces_residence == "Vrai")
                                <option selected value="Vrai">Vrai</option>
                                <option value="Faux">Faux</option>
                            @else
                                <option value="Vrai">Vrai</option>
                                <option selected value="Faux">Faux</option>
                            @endif
                            
                        </select>
                    </label>
                </div>
                <div>
                    <label for="">
                        Verification et signature du registre de présence de l'agent : 
                        <select name="verif_presence_agent" id="verif_presence_agent">
                            @if ($suivi->verif_presence_agent == "Vrai")
                                <option selected value="Vrai">Vrai</option>
                                <option value="Faux">Faux</option>
                            @else
                                <option value="Vrai">Vrai</option>
                                <option selected value="Faux">Faux</option>
                            @endif
                            
                        </select>
                    </label>
                </div>
                <div>
                    <label for="">
                        Présence de l'agent : 
                        <select name="presence_agent" id="presence_agentss">
                            @if ($suivi->presence_agent == "Vrai")
                                <option selected value="Vrai">Vrai</option>
                                <option value="Faux">Faux</option>
                            @else
                                <option value="Vrai">Vrai</option>
                                <option selected value="Faux">Faux</option>
                            @endif
                            
                        </select>
                    </label>
                </div>
                <div>
                    <label for="">
                        Heure d'arrivé de l'agent : <input type="time" id="heure_arrive_agent" name="heure_arrive_agent" min="06:30" max="18:00" value="{{$suivi->heure_arrive_agent}}">
                    </label>
                </div>
                <div>
                    <label for="pres_corporel_vestimentaire">
                        Présentation corporelle et vestimentaire : 
                        @if ($suivi->pres_corporel_vestimentaire == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->pres_corporel_vestimentaire == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->pres_corporel_vestimentaire == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pres_corporel_vestimentaire" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        
                    </label>
                </div>
                <div>
                    <label for="entretient_plafond">
                        Entretien des plafonds :

                        @if ($suivi->entretient_plafond == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_plafond" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->entretient_plafond == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_plafond" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_plafond" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_plafond" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->entretient_plafond == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_plafond" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_plafond" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_plafond" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="essuyage_vitre">
                        Essuyage des vitres / Nacos / Fenêtre / Portes :

                        @if ($suivi->essuyage_vitre == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->essuyage_vitre == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->essuyage_vitre == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="depousierage_appareil">
                        Dépousièrage des appareils électroniques :
                        @if ($suivi->depousierage_appareil == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_appareil" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->depousierage_appareil == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_appareil" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_appareil" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_appareil" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->depousierage_appareil == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_appareil" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_appareil" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_appareil" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="essuyage_vitre">
                        Essuyage des vitres / Nacos / Fenêtre / Portes :

                        @if ($suivi->essuyage_vitre == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->essuyage_vitre == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->essuyage_vitre == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="essuyage_vitre" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="depousierage_meuble">
                        Dépousièrage des meubles : 

                        @if ($suivi->depousierage_meuble == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_meuble" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->depousierage_meuble == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_meuble" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_meuble" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_meuble" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->depousierage_meuble == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_meuble" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_meuble" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="depousierage_meuble" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="entretient_corbeil">
                        Vidage et entretien des corbeilles : 
                        @if ($suivi->entretient_corbeil == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_corbeil" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->entretient_corbeil == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_corbeil" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_corbeil" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_corbeil" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->entretient_corbeil == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_corbeil" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_corbeil" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_corbeil" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="entretient_sanitaire">
                        Entretien des sanitaires : 
                        @if ($suivi->entretient_sanitaire == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_sanitaire" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->entretient_sanitaire == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_sanitaire" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_sanitaire" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_sanitaire" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->entretient_sanitaire == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_sanitaire" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_sanitaire" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="entretient_sanitaire" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="balayage_netoyage_sol">
                        Balayage et netoyage du sol : 
                        @if ($suivi->balayage_netoyage_sol == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="balayage_netoyage_sol" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->balayage_netoyage_sol == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="balayage_netoyage_sol" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="balayage_netoyage_sol" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="balayage_netoyage_sol" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->balayage_netoyage_sol == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="balayage_netoyage_sol" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="balayage_netoyage_sol" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="balayage_netoyage_sol" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="repassage">
                        Repassage du linge : 
                        @if ($suivi->repassage == "Insatisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repassage" checked='checked' id="inlineRadio1" value="Insatisfait">
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
                        @endif
                        @if ($suivi->repassage == "Moyen")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repassage" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repassage" checked='checked' id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repassage" id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                        @if ($suivi->repassage == "Satisfait")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repassage" id="inlineRadio1" value="Insatisfait">
                                <label class="form-check-label" for="inlineRadio1">Insatisfait</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repassage" id="inlineRadio2" value="Moyen">
                                <label class="form-check-label" for="inlineRadio2">Moyen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repassage" checked='checked' id="inlineRadio3" value="Satisfait">
                                <label class="form-check-label" for="inlineRadio2">Satisfait</label>
                            </div>
                        @endif
                    </label>
                </div>

                <div>
                    <label for="">Sélectionner l'agent de suivi :
                        <select name="id_personnel" class="form-control" size="3" aria-label="size 3 select example">>
                            @foreach ($personnels as $unPersonnel)
                                @if ($unPersonnel['id_personnel'] == $suivi->id_personnel)
                                    <option  value={{$unPersonnel['id_personnel']}} selected>{{$unPersonnel['id_personnel']}} 👉️ {{$unPersonnel['nom'].' '.$unPersonnel['prenom']}}</option>                                    
                                @else
                                    <option value={{$unPersonnel['id_personnel']}}>{{$unPersonnel['id_personnel']}} 👉️ {{$unPersonnel['nom'].' '.$unPersonnel['prenom']}}</option>
                                @endif
                            @endforeach
                        </select>
                    </label>

                </div>

                <div>
                    <label for="">Sélectionner l'agent suivi :
                        <select name="id_agent" class="form-control" size="3" aria-label="size 3 select example">>
                            <!--option selected>-- Personnel --</option-->
                            @foreach ($agents as $unAgent)
                                @if ($unAgent['id_agent'] == $suivi->id_agent)
                                <option value={{$unAgent['id_agent']}} selected>{{$unAgent['id_agent']}} 👉️ {{$unAgent['nom'].' '.$unAgent['prenom']}}</option>
                                @else
                                    <option value={{$unAgent['id_agent']}}>{{$unAgent['id_agent']}} 👉️ {{$unAgent['nom'].' '.$unAgent['prenom']}}</option>
                                @endif
                            @endforeach
                        </select>
                    </label>
                </div>           
            </div>

            <input type="submit" class="btn btn-primary" value="ENREGISTRER LES MODIFICATIONS"/>
        </form>
    </div>
</body>
</html>

@endsection