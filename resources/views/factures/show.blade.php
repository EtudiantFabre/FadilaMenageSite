@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFFICHAGE D'UNE FACTURE</title>
</head>
<body>
    <div class="container">
        <h1>AFFICHAGE D'UNE FACTURE</h1>
        <form action="{{route('factures.index')}}" method="GET">
            @csrf
            @method('GET')
        
            <div>
                <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Rémunération Brut</th>
                            <th>Rémunération Net</th>
                            <th>Conciliation social</th>
                            <th>Provision Social</th>
                            <th>Cotisation provisoir congés</th>
                            <th>Frais</th>
                            <th>TVA</th>
                            <th>Total de bour</th>
                            <th>Total TTC</th>
                        </tr>
                    </thead>

                    <tr>
                        <td>
                            {{$facture->remuneration_brut}}
                        </td>
                        <td>
                            {{$facture->remuneration_net}}
                        </td>
                        <td>
                            {{$facture->conciliation_social}}
                        </td>
                        <td>
                            {{$facture->provision_sociales}}
                        </td>
                        <td>
                            {{$facture->cotisation_provisoir_conges}}
                        </td>
                        <td>
                            {{$facture->frais}}
                        </td>
                        <td>
                            {{$facture->tva}}
                        </td>
                        <td>
                            {{$facture->total_debour}}
                        </td>
                        <td>
                            {{$facture->total_ttc}}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-lg" type="submit">J'ai vu</button>
            </div>
        </form>
    </div>
</body>
</html>
@endsection