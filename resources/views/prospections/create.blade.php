@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d'une prospection</title>
</head>
<body>
    <div class="container">
        <form action="{{route('prospections.store')}}">
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
                <label for="raison_social">
                    Raison social<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" name="raison_social">
                </label>
            </div>
            <div>
                <label for="date">
                    Date<span class="text-danger required" aria-hidden="true">*</span> : <input type="date" name="date">
                </label>
            </div>
            <div>
                <label for="canal">
                    Canal<span class="text-danger required" aria-hidden="true">*</span> : <input type="text">
                </label>
            </div>
            <div>
                <label for="competence_rechercher">
                    Compétence recherché<span class="text-danger required" aria-hidden="true">*</span> :
                    <select name="competence_rechercher" id="competence_rechercher"></select>
                </label>
            </div>
            <div>
                <label for="type_maison">
                    Type de maison<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="type_maison" name="type_maison">
                </label>
            </div>
            <div>
                <label for="nbre_de_chambre">
                    Nombre de chambre<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="nbre_de_chambre" name="nbre_de_chambre" min="1">
                </label>
            </div>
            <div>
                <label for="nbre_wc_douche">
                    Nombre de WC douche<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="nbre_wc_douche" name="nbre_wc_douche" min="1">
                </label>
            </div>
            <div>
                <label for="taille_famille">
                    Taille de la famille<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="taille_famille" name="taille_famille" min="1">
                </label>
            </div>
            <div>
                <label for="budget">
                    Budget<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="budget" name="budget" min="1">
                </label>
            </div>
            <div>
                <label for="info_complementaire">
                    Information complémentaire<span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="info_complementaire" name="info_complementaire">
                </label>
            </div>
            <div>
                <label for="actions_menees">
                    Action menée<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" id="actions_menees" name="actions_menees" min="1">
                </label>
            </div>
            <div>
                <label for="id_agent">
                    Agent<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_agent" id="id_agent">

                    </select>
                </label>
            </div>

            <div>
                <label for="id_client">
                    Client<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_client" id="id_client">
                        
                    </select>
                </label>
            </div>

            <div>
                <label for="id_facture">
                    Facture<span class="text-danger required" aria-hidden="true">*</span> : 
                    <select name="id_facture" id="id_facture">
                        
                    </select>
                </label>
            </div>

            <div>
                <label for="conclusion">
                    Conclusion<span class="text-danger required" aria-hidden="true">*</span> : 
                    <textarea name="conclusion" id="conclusion"  rows="-10" placeholder="Entrer la conclusion ici"></textarea>
                </label>
            </div>
        </form>
    </div>
</body>
</html>

@endsection