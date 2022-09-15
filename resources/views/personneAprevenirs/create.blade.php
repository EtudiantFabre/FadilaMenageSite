@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRÉATION D'UNE PERSONNE À PREVENIR</title>
</head>
<body>
    <div class="container">
        <h1>CRÉATION D'UNE PERSONNE À PREVENIR</h1>
        <form action="{{route('personneAprevenirs.store')}}" method="POST">
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
                <label for="nom">
                    Nom de la personne <span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="nom" id="nom">
                </label>
            </div>
            <div>
                <label for="prenom">
                    Prénom<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="prenom" id="prenom">
                </label>
            </div>
            <div>
                <label for="lien_de_parente">
                    Lien de parenté<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="lien_de_parente" id="lien_de_parente">
                </label>
            </div>
            <div>
                <label for="id_candidat">
                    Candidat<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_candidat" id="id_candidat">
                        @foreach ($candidats as $candidat)
                            <option value="{{$candidat['id_candidat']}}">{{$candidat['id_candidat']}} 👉️👉️ {{$candidat['nom'].' '.$candidat['prenom']}}</option>
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