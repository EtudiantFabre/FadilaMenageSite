<?php

function rechercherAgent($nom){
    try {
        $terme = $nom;//strtolower($nom);
        $myPDO = new PDO('pgsql:host=localhost;dbname=fadila', 'fadila', 'fadila');

        $select_terme = $myPDO->prepare("SELECT nom, prenom FROM agents WHERE nom LIKE '%$terme%' OR prenom LIKE '%$terme%'");
        $select_terme->setFetchMode(PDO::FETCH_ASSOC);
        $select_terme->execute();
        $tab = $select_terme->fetchAll();
        return $tab;
    } catch (Exception $e) {
        return die("Une erreur vers la base de donné à échoué : ". $e->getMessage()); 
    }
    
}