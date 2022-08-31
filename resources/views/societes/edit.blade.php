@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MODIFICATION D'UNE SOCIETÉ</title>
</head>
<body>
    <div class="container">
        <h1>MODIFICATION D'UNE SOCIETÉ</h1>
        <form action="{{route('societes.update', $societe)}}" method="POST">
            @csrf
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
                <label for="sigle">
                    Sigle<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="sigle" id="sigle" value="{{$societe->sigle}}">
                </label>
            </div>
            <div>
                <label for="description">
                    Description du sigle<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="description" id="description" value="{{$societe->description}}">
                </label>
            </div>
            <div>
                <label for="date_offre">
                    Entrer la date de l'offre<span class="text-danger required" aria-hidden="true">*</span> : <input type="date" name="date_offre" id="date_offre" value="{{$societe->date_offre}}">
                </label>
            </div>
            <div>
                <label for="domaine">
                    Sélectionner le domaine<span class="text-danger required" aria-hidden="true">*</span> : 
                        <select name="domaine" id="domaine" class="form-select" multiple aria-label="domaine">
                            
                            @switch($societe->domaine)
                                @case('NOUNOU')
                                    <option selected value="NOUNOU">NOUNOU</option>
                                    <option value="CHAUFFEUR">CHAUFFEUR</option>
                                    <option value="CUISINE">CUISINE</option>
                                    <option value="NETOYAGE">NETOYAGE</option>
                                    @break
                                @case('CHAUFFEUR')
                                    <option value="NOUNOU">NOUNOU</option>
                                    <option selected value="CHAUFFEUR">CHAUFFEUR</option>
                                    <option value="CUISINE">CUISINE</option>
                                    <option value="NETOYAGE">NETOYAGE</option> 
                                    @break
                                @case ('CUISINE')
                                    <option value="NOUNOU">NOUNOU</option>
                                    <option value="CHAUFFEUR">CHAUFFEUR</option>
                                    <option selected value="CUISINE">CUISINE</option>
                                    <option value="NETOYAGE">NETOYAGE</option>                                
                                    @break

                                @case ('NETOYAGE')
                                    <option value="NOUNOU">NOUNOU</option>
                                    <option value="CHAUFFEUR">CHAUFFEUR</option>
                                    <option value="CUISINE">CUISINE</option>
                                    <option selected value="NETOYAGE">NETOYAGE</option>                                
                                    @break
                                @default
                                    <option value="NOUNOU">NOUNOU</option>
                                    <option value="CHAUFFEUR">CHAUFFEUR</option>
                                    <option value="CUISINE">CUISINE</option>
                                    <option value="NETOYAGE">NETOYAGE</option> 
                            @endswitch
                        </select>
                </label>
            </div>
            <section>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" class="btn btn-primary" value="ENREGISTRER LES MODIFICATIONS"/>
                </div>
            </section>
        </form>
    </div>
</body>
</html>
@endsection