@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listes des factures</title>
    </head>
    <body>
        <div class="container rounded-4 bg-warning shadow-lg p-3 mb-5 bg-div">
            <h1>Listes des factures</h1>
            <section>
                <form action="{{route('factures.create')}}">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">CRÉER UNE FACTURE</button>
                    </div>
                </form>
            </section>
            <br>
            <table class="table table-primary table-hover table-striped table-bordered border-primary text-center justify-content-center">
                <thead class="table-dark">
                    <tr>
                        <th>Identifiant</th>
                        <!--th>Rémunération Brut</th>
                        <th>Rémunération Net</th>
                        <th>Conciliation social</th>
                        <th>Provision Social</th>
                        <th>Cotisation provisoir congés</th>
                        <th>Frais</th>
                        <th>TVA</th-->
                        <th>Total de bour</th>
                        <th>Total TTC</th>
                        <th class="bg-danger">Actions</th>
                    </tr>
                </thead>

                @foreach ($factures as $facture)
                    <tr>
                        <td>
                            {{$facture->id_facture}}
                        </td>
                        <!--td>
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
                        </td-->
                        <td>
                            {{$facture->total_debour}}
                        </td>
                        <td>
                            {{$facture->total_ttc}}
                        </td>
                        <td>
                            <div class="d-flex dropdown mr-1">
                                <form action="{{route('factures.show', $facture->id_facture)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">Afficher</button>
                                </form>
                            
                                <form action="{{route('factures.destroy', $facture->id_facture)}}" method="post" onsubmit="return AccepterSuppression()">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                </form>
                            
                                <form action="{{route('factures.edit', $facture->id_facture)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-info">Modifier</button>
                                </form>
                            </div>
                        </td>
                        
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
    </html>

<script>
    function AccepterSuppression() {
        let result = confirm("Voulez-vous vraiment supprimer ?");
        if (result){
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection