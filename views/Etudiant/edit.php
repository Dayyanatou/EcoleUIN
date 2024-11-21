<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification etudiant</title>
</head>
<body>
    <?php
    $matricule=$_GET['matricule'];
    require_once('../../models/EtudiantService.php');
    $etService=new EtudiantService();
    $etudiant=$etService->getByMatricule($matricule);
    //var_dump($etudiant);
    ?>
<h1>Formulaire modification étudiant </h1>
  
    <form action="../../controllers/EtudiantCtrl.php" method="post">
    <table  align="center">
        <tr>
            <td>MATRICULE</td>
            <td><input type="text" name="matricule" readOnly placeholder="<?= $etudiant['matricule'] ?>" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NOM</td>
            <td><input type="text" name="nom" placeholder="<?php echo $etudiant['nom']; ?>" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>PRENOM</td>
            <td><input type="text" name="prenom" placeholder="<?= $etudiant['prenom'] ?>" required></td>
        </tr>
        <tr>
            <td>SEXE</td>
            <td>
               <!-- H <input type="radio" name="sexe"> 
                F <input type="radio" name="sexe"> -->

                <select name="sexe" required>
                    <option value="">Veuillez choisir le sexe de l'étudiant</option>
                    <option value="H" <?php if($etudiant['sexe']=='H') echo 'selected' ?> >Homme</option>
                    <option value="F" <?php if($etudiant['sexe']=='F') echo 'selected' ?> >Femme</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>TEL</td>
            <td><input type="number" name="tel" placeholder="<?= $etudiant['tel'] ?>" required></td>
        </tr>
        <tr>
            <td>DATE DE NAISSANCE</td>
            <td><input type="date" placeholder="<?= $etudiant['ddn'] ?>" name="ddn" required></td>
        </tr>
        <tr>
            <input type="hidden" name="action" value="modifier">
            <td colspan="2" style="text-align: center">  

&nbsp; &nbsp; &nbsp;&nbsp;
<input type='submit' style="background-color: green; color: white" value="MODIFIER"></td>
        </tr>
    </table>
    </form>
</body>
</html>