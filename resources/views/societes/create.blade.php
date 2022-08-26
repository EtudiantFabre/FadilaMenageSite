@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d'une societé</title>
</head>
<body>
    <div class="container">
        <h1>CRÉATION D'UNE FACTURE</h1>
        <form action="{{route('societes.store')}}" method="POST">
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
                <div>
                    <label for="sigle">
                        Entrer le sigle<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="sigle" id="sigle">
                    </label>
                </div>
                <div>
                    <label for="description">
                        Entrer la description<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="description" id="description">
                    </label>
                </div>
                <div>
                    <label for="date_offre">
                        Entrer la date de l'offre<span class="text-danger required" aria-hidden="true">*</span> : <input type="date" name="date_offre" id="date_offre">
                    </label>
                </div>
                <div>
                    <label for="domaine">
                        Sélectionner le domaine<span class="text-danger required" aria-hidden="true">*</span> : 
                            <select name="domaine" id="domaine" class="form-select" multiple aria-label="domaine">
                                <option value="NOUNOU">NOUNOU</option>
                                <option value="CHAUFFEUR">CHAUFFEUR</option>
                                <option value="CUISINE">CUISINE</option>
                                <option value="NETOYAGE">NETOYAGE</option>
                            </select>
                    </label>
                </div>
            <section>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" class="btn btn-primary" value="ENREGISTRER LE SUIVI"/>
                </div>
            </section>
        </form>
    </div>
</body>
</html>
@endsection