<?php
require_once('Provider.php');

class EnseignantService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


    public function add($id, $nom, $prenom, $sexe, $email, $adresse)
    {
        $requete = 'insert into Enseignants (id, nom, prenom, sexe, email, adresse) values (:id, :nm, :pr, :sx, :email, :adresse)';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            'id' => $id,
            'nm' => $nom,
            'pr' => $prenom,
            'sx' => $sexe,
            'email' => $email,
            'adresse' => $adresse
        ]);



    }

    public function edit($id, $nom, $prenom, $sexe, $email, $adresse)
    {

        $requete='update enseignants set nom=:nm, prenom=:pr, sexe=:sx, email=:email, adresse=:adresse where id=:id';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            'nm'=> $nom,
            'pr'=> $prenom,
            'sx'=> $sexe,
            'email'=> $email,
            'adresse'=> $adresse,
            'id'=> $id
        ]);

    }


    public function getByid($id)
    {
        $requete="select * from enseignants where id=:id";
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'id'=> $id
        ]);
        $Enseignant=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if (isset($Enseignant[0])){
            return $enseignant[0];
        }
        else
        return null;
    }
    public function getAll()
    {
        $requete = 'select * from enseignants order by id desc';
        $st = $this->connexion->query($requete);
        $enseignant = $st->fetchAll(PDO::FETCH_ASSOC);
        return $enseignant;
    }

    public function delete($id)
    {
        $requete='delete from enseignants where id=:id';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'id'=> $id
        ]);
    }

}