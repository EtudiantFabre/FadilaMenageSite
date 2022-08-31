@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MODIFICATION D'UNE PERSONNE À PREVENIR</title>
</head>
<body>
    <div class="container">
        <h1>MODIFICATION D'UNE PERSONNE À PREVENIR</h1>
        <form action="{{route('personneAprevenirs.update', $persAprev)}}" method="POST">
            @csrf
            @method('put')
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
                <label for="nom">
                    Nom de la personne <span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="nom" id="nom" value="{{$persAprev->nom}}">
                </label>
            </div>
            <div>
                <label for="prenom">
                    Prénom<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="prenom" id="prenom" value="{{$persAprev->prenom}}">
                </label>
            </div>
            <div>
                <label for="lien_de_parente">
                    Lien de parenté<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="lien_de_parente" id="lien_de_parente" value="{{$persAprev->lien_de_parente}}">
                </label>
            </div>
            <div>
                <label for="id_candidat">
                    Candidat<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_candidat" id="id_candidat">
                        @foreach ($candidats as $candidat)
                            @if ($candidat['id_candidat'] == $persAprev->id_personne_a_prevenir)
                                <option selected value="{{$candidat['id_candidat']}}">{{$candidat['id_candidat']}} 👉️👉️ {{$candidat['nom'].' '.$candidat['prenom']}}</option>                                  
                            @else
                                <option value="{{$candidat['id_candidat']}}">{{$candidat['id_candidat']}} 👉️👉️ {{$candidat['nom'].' '.$candidat['prenom']}}</option>
                            @endif
                            
                        @endforeach
                    </select>
                </label>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="ENREGISTRER LA PERSONNE À PREVENIR"/>
            </div>
        </form>
    </div>
</body>
</html>
@endsection