<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Enseignant</title>
</head>
<body>
    <?php
    $id=$_GET['id'];
    require_once('../../models/EnseignantService.php');
    $etService=new EnseignantService();
    $enseignant=$etService->getByid($id);
    //var_dump($etudiant);
    ?>
<h1>Formulaire modification Enseignant</h1>
  
    <form action="../../controllers/EnseignantCtrl.php" method="post">
    <table  align="center">
        <tr>
            <td>IDENTIFIANT</td>
            <td><input type="text" name="id" readOnly placeholder="<?= $enseignant['id'] ?>" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NOM</td>
            <td><input type="text" name="nom" placeholder="<?php echo $enseignant['nom']; ?>" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>PRENOM</td>
            <td><input type="text" name="prenom" placeholder="<?= $enseignant['prenom'] ?>" required></td>
        </tr>
        <tr>
            <td>SEXE</td>
            <td>
                H <input type="radio" name="sexe"> 
                F <input type="radio" name="sexe"> 

              <!--  <select name="sexe" required>
                    <option value="">Veuillez choisir le sexe de l'enseignant</option>
                    <option value="H" <?php if($enseignant['sexe']=='Homme') echo 'selected' ?> >Homme</option>
                    <option value="F" <?php if($enseignant['sexe']=='Femme') echo 'selected' ?> >Femme</option>
                </select>-->
            </td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="email" placeholder="<?= $enseignant['tel'] ?>" required></td>
        </tr>
        <tr>
            <td>ADRESSE</td>
            <td><input type="text" placeholder="<?= $enseignant['ddn'] ?>" name="ddn" required></td>
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