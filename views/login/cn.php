<?php
require_once("../../models/provider.php");

class UserService {
    private $con;

    public function __construct() {
        $connexion = new Connexion();
        $this->con = $connexion->getconnection();
    }

    public function verifierUtilisateur($Username, $motpass) {
        $verif = "SELECT Username, motpass FROM users WHERE Username = :username AND motpass = :motpass";
        $statement = $this->con->prepare($verif);
        $statement->execute(['username' => $Username, 'motpass' => $motpass]);
        $recupUser = $statement->fetch();

        return $recupUser && $recupUser['Username'] == $Username && $recupUser['motpass'] == $motpass;
    }
}