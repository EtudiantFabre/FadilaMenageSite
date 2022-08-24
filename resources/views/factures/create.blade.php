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
            <form action="{{route('factures.store')}}" method="POST">
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
                    <h1>CRÉATION D'UNE FACTURE</h1>
                    <div>
                        <label for="remuneration_brut">
                            Rémunération BRUT<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="remuneration_brut" id="remuneration_brut">
                        </label>
                    </div>
                    <div>
                        <label for="remuneration_net">
                            Rémunération NET<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="remuneration_net" id="remuneration_net">
                        </label>
                    </div>
                    <div>
                        <label for="conciliation_social">
                            Conciliation social<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="conciliation_social" id="conciliation_social">
                        </label>
                    </div>
                    <div>
                        <label for="provision_sociales">
                            Provision social<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="provision_sociales" id="provision_sociales">
                        </label>
                    </div>
                    <div>
                        <label for="cotisation_provisoir_conges">
                            Cotisation provisoir congés<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="cotisation_provisoir_conges" id="cotisation_provisoir_conges">
                        </label>
                    </div>
                    <div>
                        <label for="frais">
                            Frais<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="frais" id="frais">
                        </label>
                    </div>
                    <div>
                        <label for="tva">
                            Taxe sur la valeur ajouté(TVA)<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="tva" id="tva">
                        </label>
                    </div>
                    <div>
                        <label for="tva">
                            Total de Bour<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="total_debour" id="total_debour">
                        </label>
                    </div>
                    <div>
                        <label for="tva">
                            Total TTC<span class="text-danger required" aria-hidden="true">*</span> : <input type="number" name="total_ttc" id="total_ttc">
                        </label>
                    </div>
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