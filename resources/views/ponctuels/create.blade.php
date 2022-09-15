@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Création d'une facture</title>
    </head>
    <body>
        <div class="container">
            <h1>CRÉATION D'UNE FACTURE</h1>

            <form action="{{route('ponctuels.store')}}" method="POST">
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
                    <div>
                        <label for="date">
                            Date <span class="text-danger required" aria-hidden="true">*</span> : <input type="date" id="date" name="date">
                        </label>
                    </div>
                    <div>
                        <label for="nom">
                            Nom <span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="nom" name="nom">
                        </label>
                    </div>
                    <div>
                        <label for="prenom">
                            Prénom <span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="prenom" name="prenom">
                        </label>
                    </div>
                    <div>
                        <label for="adresse">
                            Adresse <span class="text-danger required" aria-hidden="true">*</span>  
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <td><label>{{__('Ville')}}<span class="text-danger required" aria-hidden="true">*</span></label></td>
                                    <td>
                                        <input type="text" name="ville" placeholder="Ville" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>{{__('Quartier')}}<span class="text-danger required" aria-hidden="true">*</span></label></td>
                                    <td><input type="text" name="quartier" class="form-control" placeholder="Quartier"/></td>
                                </tr>
                            </table>
                        </label>
                    </div>
                    <div>
                        <label for="forfait">
                            Forfait <span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="forfait" name="forfait">
                        </label>
                    </div>
                    <div>
                        <label for="montant_ttc">
                            Montant TTC <span class="text-danger required" aria-hidden="true">*</span> : <input type="text" id="montant_ttc" name="montant_ttc">
                        </label>
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" class="btn btn-primary" value="ENREGISTRER LE PONCTUEL"/>
                </div>
            </form>
        </div>
    </body>
    </html>
@endsection