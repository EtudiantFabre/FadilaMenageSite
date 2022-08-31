@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRÉATION D'UNE ÉVALUATION</title>
</head>
<body>
    <div class="container">
        <h1>CRÉATION D'UNE ÉVALUATION</h1>
        <form action="{{route('evaluations.store')}}" method="POST">
            @csrf
            @method('POST')
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
                <label for="periodicite">
                    Périodicité <span class="text-danger required" aria-hidden="true">*</span> <input type="text" name="periodicite" id="periodicite">
                </label>
            </div>
            <div>
                <label for="debut_periode">
                    Début de la période <span class="text-danger required" aria-hidden="true">*</span> <input type="date" name="debut_periode" id="debut_periode">
                </label>
            </div>
            <div>
                <label for="fin_periode">
                    Fin de la période <span class="text-danger required" aria-hidden="true">*</span> <input type="date" name="fin_periode" id="fin_periode">
                </label>
            </div>
            <div>
                <label for="note_sur_vingt">
                    Note de l'évaluation (/20) <span class="text-danger required" aria-hidden="true">*</span> <input type="integer" min="0" max="20" name="note_sur_vingt">
                </label>
            </div>
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

            <div class="form-floating" >
                Commentaire (ceci est optionnel):
                <textarea class="form-control" placeholder="Pricisez si vous avez" id="floatingTextarea2" style="height: 100px" name="commentaire"></textarea>
            </div>   
            <div class="form-floating" >
                Sugestion (ceci est optionnel):
                <textarea class="form-control" placeholder="Pricisez si vous avez" id="floatingTextarea2" style="height: 100px" name="sugestion"></textarea>
            </div> 

            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="ENREGISTRER L'ÉVALUATION"/>
            </div>
        </form>
    </div>
</body>
</html>
@endsection