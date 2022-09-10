<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personnel;
use App\Models\Candidat;
use App\Models\Agent;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personnel1 = Personnel::create([
            'nom' => "Franc",
            'prenom' => 'Amegnigan',
            'date_naissance' => '13/02/2001',
            'lieu_naissance' => 'Sokodé',
            'genre' => 'M',
            'nationalite' => 'Togolaise',
            'piece_identite' => 'CU',
            'numero_de_piece' => 'DERE12-12-DERZ', 
            'date_delivrer' => '10/12/2020',
            'date_expiration' => '10/12/2025',
            'ville_residence' => 'Kara',
            'quartier' => 'Pya',
            'rue' => '20',
            'email' => 'franc@gmail.com',
            'situation_familiale' => 'Célibataire',
            'enfants_en_charge' => '5',
            'profession' => 'Etudiant',
            'avatar' => 'forme.png',
            'salaire' => '25000',
            'post_ocuper' => 'SUIVI',
            'nature_contrat' => 'CDD',
            'telephone'=> '70489745',
        ]);

        $personnel2 = Personnel::create([
            'nom' => "TOYI",
            'prenom' => 'Fabrice',
            'date_naissance' => '13/02/2001',
            'lieu_naissance' => 'Sokodé',
            'genre' => 'M',
            'nationalite' => 'Togolaise',
            'piece_identite' => 'CU',
            'numero_de_piece' => 'DERE12-12-DERZ', 
            'date_delivrer' => '10/12/2020',
            'date_expiration' => '10/12/2025',
            'ville_residence' => 'Kara',
            'quartier' => 'Pya',
            'rue' => '20',
            'email' => 'fabrice@gmail.com',
            'situation_familiale' => 'Célibataire',
            'enfants_en_charge' => '5',
            'profession' => 'Professeur',
            'avatar' => 'forme.png',
            'salaire' => '25000',
            'post_ocuper' => 'SUIVI',
            'nature_contrat' => 'CDD',
            'telephone'=> '70489745',
        ]);

        /*$candidat1 = Candidat::create([
            'nom' => "TOYI",
            'prenom' => 'Fabrice',
            'date_naissance' => '13/02/2001',
            'lieu_naissance' => 'Sokodé',
            'genre' => 'M',
            'nationalite' => 'Togolaise',
            'piece_identite' => 'CU',
            'numero_de_piece' => 'DERE12-12-DERZ', 
            'date_delivrer' => '10/12/2020',
            'date_expiration' => '10/12/2025',
            'ville_residence' => 'Kara',
            'quartier' => 'Pya',
            'rue' => '20',
            'email' => 'fabrice@gmail.com',
            'situation_familiale' => 'Célibataire',
            'enfants_en_charge' => '5',
            'profession' => 'Professeur',
            'avatar' => 'forme.png',
            'salaire' => '25000',
            'post_ocuper' => 'SUIVI',
            'nature_contrat' => 'CDD',
            'telephone'=> '70489745',
        ]);*/

        Agent::create([
            'nom' => "RENE",
            'prenom' => 'DROIT',
            'date_naissance' => '13/02/2021',
            'lieu_naissance' => 'Sokodé',
            'genre' => 'M',
            'nationalite' => 'Togolaise',
            'piece_identite' => 'CU',
            'numero_de_piece' => 'DER2-12-DERZ', 
            'date_delivrer' => '10/12/2020',
            'date_expiration' => '10/12/2025',
            'ville_residence' => 'Kara',
            'quartier' => 'Pya',
            'rue' => '20',
            'email' => 'fabrice@gmail.com',
            'situation_familiale' => 'Célibataire',
            'enfants_encharge' => '5',
            'profession' => 'Professeur',
            'avatar' => 'forme.png',
            'poste_candidate' => 'NOUNOU',
            'horaire_travail_souhaite' => '7H À 18H',
            'objectif' => 'AIDER PLUS DE PERSONNE',
            'qualite_personnelles' => 'AMOUR',
            'savoir_faire' => 'COUTURE',
            'disponible_a_loger' => 'OUI',
            'nature_contrat' => 'CDD',
            'oraire_travail_passe' => '14H',
            'date_retenu' => '10/11/2022',
            'status' => 'ACTIF',
            'telephone' => '70254578'
        ]);

        Agent::create([
            'nom' => "ALLASAN",
            'prenom' => 'Afez',
            'date_naissance' => '13/02/1997',
            'lieu_naissance' => 'Sokodé',
            'genre' => 'Masculin',
            'nationalite' => 'Togolaise',
            'piece_identite' => "Carte d'identite",
            'numero_de_piece' => 'DER2-12-DERZ', 
            'date_delivrer' => '10/12/2020',
            'date_expiration' => '10/12/2025',
            'ville_residence' => 'Sokodé',
            'quartier' => 'Zongo',
            'rue' => '20',
            'email' => 'afez@gmail.com',
            'situation_familiale' => 'Célibataire',
            'enfants_encharge' => '5',
            'profession' => 'Eleve',
            'avatar' => 'forme.png',
            'poste_candidate' => 'NOUNOU',
            'horaire_travail_souhaite' => '7H À 18H',
            'objectif' => 'AIDER PLUS DE PERSONNE',
            'qualite_personnelles' => 'AMOUR',
            'savoir_faire' => 'COUTURE',
            'disponible_a_loger' => 'OUI',
            'nature_contrat' => 'CDD',
            'oraire_travail_passe' => '17H',
            'date_retenu' => '10/11/2022',
            'status' => 'ACTIF',
            'telephone' => '91584697'
        ]);
    }
}
