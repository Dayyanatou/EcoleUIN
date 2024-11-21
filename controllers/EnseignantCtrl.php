<?php
require_once('../models/EnseignantService.php');

$ENService = new EnseignantService();
$action =isset($_GET['action'])? $_GET['action']: (isset($_POST['action'])? $_POST['action']: '');

if ($action == 'formE') {
    Header('Location:../views/Etudiant/formE.php');
}

if ($action == 'listEN') {
    Header('Location:../views/Etudiant/listEN.php');
}

if ($action == 'delete') {
    //recuperation des donnees
    $id=$_GET['id'];

    //appel du model
    $etService->delete($id);

    //redirection vers la vue
    Header('Location:../views/Etudiant/listEN.php?message=Enseignant supprimé');
 
}




if ($action == 'ajout') {
    //1. recupertaion de donnees
    $id= $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];


    //2. Appel du model
    $ENService->add($id, $nom, $prenom, $sexe, $email, $adresse);

    //3. appel de la vue
    Header('Location:../views/Etudiant/listEN.php?message=Enseignant ajouté');
}


if($action=='editForm'){
    $id=$_GET['id'];
    Header('Location:../views/Etudiant/editE.php?id='.$id);
}




if ($action == 'modifier') {
    //1. recupertaion de donnees
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $email= $_POST['email'];
    $adresse= $_POST['adresse']


    //2. Appel du model
    $ENService->editE($id, $nom, $prenom, $sexe, $email, $adresse);

    //3. appel de la vue
    Header('Location:../views/Enseignant/listEN.php?message=Enseignant modifié');
}