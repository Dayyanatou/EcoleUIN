<?php

class SalleService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Ajouter une nouvelle salle
    public function ajouterSalle($nom, $capacite) {
        $stmt = $this->db->prepare("INSERT INTO salles (nom, capacite) VALUES (?, ?)");
        return $stmt->execute([$nom, $capacite]);
    }

    // Modifier une salle
    public function modifierSalle($id, $nom, $capacite) {
        $stmt = $this->db->prepare("UPDATE salles SET nom = ?, capacite = ? WHERE id = ?");
        return $stmt->execute([$nom, $capacite, $id]);
    }

    // Supprimer une salle
    public function supprimerSalle($id) {
        $stmt = $this->db->prepare("DELETE FROM salles WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // Consulter une salle
    public function consulterSalle($id) {
        $stmt = $this->db->prepare("SELECT * FROM salles WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Lister toutes les salles
    public function listerSalles() {
        $stmt = $this->db->query("SELECT * FROM salles");
        return $stmt->fetchAll();
    }
}

