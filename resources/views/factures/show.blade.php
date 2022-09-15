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
    <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
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
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary btn-lg" type="submit">J'ai vu</button>
                <form action="{{$pdf->download()}}">
                    <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Voir le PDF</button>
                </form>
                

                <!--div>                    
                    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">PDF de la facture N° {{$facture->id_facture}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div-->
            </div>
        </form>
    </div>
</body>
</html>
@endsection