<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste  des Enseignant</h1>
<a href="../../controllers/EnseignantCtrl.php?action=formE" >Go to students formE</a> <br >
<?php 
        if(isset($_GET['message'])){
            ?>
              <span style="color: green; font-size: large"><?php echo $_GET['message']; ?></span>
        <?php }
    ?>

<?php
require_once('../../models/EnseignantService.php');
$ENService=new EnseignantService();
$Enseignant=$ENService->getAll();
?>    


<table border="1" align="center">
    <tr>
    <th>ID</th><th>NOM</th><th>PRENOM</th><th>SEXE</th><th>EMAIL</th><th>ADRESSE</th><th>ACTIONS</th>
    </tr>
    <?php
foreach($Enseignant as $EN){
 ?>   
    <tr>
    <td><?php echo $EN['id']; ?></td>
    <td><?php echo $EN['nom']; ?></td>
    <td><?php echo $EN['prenom']; ?></td>
    <td><?php echo $EN['sexe']; ?></td>
    <td><?php echo $EN['email']; ?></td>
    <td><?php echo $EN['adresse']; ?></td>
    <td><a href="../../controllers/EnseignantCtrl.php?action=editFormE&id=<?php echo $et['id']; ?>" >MODIFIER</a>--<a href="../../controllers/EnseignantCtrl.php?action=delete&id=<?php echo $et['id']; ?>"   onClick="return window.confirm('Etes-vous sûre de vouloir supprimer cet Enseignant')">SUPPRIMER</a></td>
    </tr>
<?php } ?>
   
</table>

<!--
<input type="hidden" name="action" value="editForm" form="f1" />
<input form="f1"  type="submit" value="MODIFIER" />
<input type="hidden" name="matricule" value="UIN" form="f1" />
-->

<form action="../../controllers/Enseignan```````````````tCtrl.php" method="GET" id="f1"></form>
</body>
</html>