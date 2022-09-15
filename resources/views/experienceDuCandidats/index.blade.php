@extends("layout")
@section("title", "Expériences des candidats")
@section("content")




                    <div class="card-header">
                        <h4 class="text-center">Expériences du candidats
                        </h4>

                    </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Candidat</th>
                                <th>Nombre d'années d'expérience</th>
                                <th>Nombre de voiture conduit</th>
                                <th>Type de voiture </th>
                                <th>Type de contrat</th>
                                <th>Nom du dernier employeur</th>
                                <th>Contact du dernier employer</th>
                                <th>Nombre d'enfants gardé</th>
                                <th>Dernier salaire</th>
                                <th>Date de demission</th>
                                <th colspan="3">Opérations</th>
                            </tr>
                        </thead>
		                <tbody>
                            <!-- On parcourt la collection de experienceDuCandidat -->
                            @foreach ($experienceDuCandidats as $experienceDuCandidat)
                            <tr>
                                <td>
                                    {{ $experienceDuCandidat->id_experience}}
                                </td>
                                <td>
                                    {{ $experienceDuCandidat->candidat}}
                                </td>
                                <td>
                                    {{ $experienceDuCandidat->nbr_annee_experience}}
                                </td>
                                <td>

                                    {{ $experienceDuCandidat->nbr_voiture_conduit}}
                                </td>
                                <td>

                                    {{ $experienceDuCandidat->type_voiture}}
                                </td>

                                <td>

                                    {{ $experienceDuCandidat->type_contrat}}
                                </td>
                                <td>
                                    {{ $experienceDuCandidat->nom_employeur}}
                                </td>
                                <td>

                                    {{ $experienceDuCandidat->numero_employeur}}
                                </td>
                                <td>

                                    {{ $experienceDuCandidat->nombre_enfants_garde}}
                                </td>
                                <td>

                                    {{ $experienceDuCandidat->dernier_salaire}}
                                </td>
                                <td>

                                    {{ $experienceDuCandidat->date_demission}}
                                </td>


                                <td>
                                    <a class="btn btn-primary btn-block" href="{{ route('experienceDuCandidats.show', $experienceDuCandidat) }}" title="Afficher plus">Afficher</a>
                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>




@endsection
