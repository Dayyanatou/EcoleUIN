<?php
// models/CoursService.php

Class CoursService {
    Private $db;

    Public function __construct($db) {
        $this→db = $db;
    }

    // Méthode pour récupérer tous les cours
    Public function getAllCours() {
        $query = $this→db→query ('SELECT * FROM cours');

        Return $query→fetchAll(PDO∷FETCH_ASSOC);
    }
}
?>

