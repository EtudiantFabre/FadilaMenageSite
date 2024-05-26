@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MODIFICATION DE LA FACTURE</title>
</head>
<body>
    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
        <h1>MODIFICATION DE LA FACTURE</h1>
        <div>
            <form action="{{route('factures.update', $facture)}}" method="POST">
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
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Rémunération BRUT<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input type="number" name="remuneration_brut" id="remuneration_brut" class="form-control" value="{{$facture->remuneration_brut}}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Rémunération NET<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input type="number" name="remuneration_net" id="remuneration_net" class="form-control" value="{{$facture->remuneration_net}}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Conciliation social<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input type="number" name="conciliation_social" id="conciliation_social" class="form-control" value="{{$facture->conciliation_social}}">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Provision social<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input type="number" name="provision_sociales" id="provision_sociales" class="form-control" value="{{$facture->provision_sociales}}">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Cotisation provisoir congés<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input type="number" name="cotisation_provisoir_conges" id="cotisation_provisoir_conges" class="form-control" value="{{$facture->provision_sociales}}">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Frais<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input type="number" name="frais" id="frais" class="form-control" value="{{$facture->frais}}">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Taxe sur la valeur ajouté(TVA)<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input type="number" name="tva" id="tva" class="form-control" value="{{$facture->tva}}">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Total de Bour<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input class="form-control" type="number" name="total_debour" id="total_debour" value="{{$facture->total_debour}}">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Total TTC<span class="text-danger required" aria-hidden="true">*</span></span>
                        <input type="number" name="total_ttc" id="total_ttc" value="{{$facture->total_ttc}}" class="form-control">
                    </div>
                </div>
                <br>
                <section>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" class="btn btn-primary" value="ENREGISTRER LES MODIFICATIONS"/>
                    </div>
                </section>
            </form>
        </div>
    </div>
</body>
</html>
@endsection