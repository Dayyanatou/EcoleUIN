<?php
require_once('../models/SalleService.php');
//require_once('../config/database.php'); // Assurez-vous d'avoir une connexion à la base de données

class SalleCtrl {
    private $salleService;

    public function __construct($db) {
        $this->salleService = new SalleService($db);
    }

    // Ajouter une salle
    public function ajouterSalle($nom, $capacite) {
        return $this->salleService->ajouterSalle($nom, $capacite);
    }

    // Modifier une salle
    public function modifierSalle($id, $nom, $capacite) {
        return $this->salleService->modifierSalle($id, $nom, $capacite);
    }

    // Supprimer une salle
    public function supprimerSalle($id) {
        return $this->salleService->supprimerSalle($id);
    }

    // Consulter une salle
    public function consulterSalle($id) {
        return $this->salleService->consulterSalle($id);
    }

    // Lister les salles
    public function listerSalles() {
        return $this->salleService->listerSalles();
    }
}

