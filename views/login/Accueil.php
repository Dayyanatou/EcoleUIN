<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src='js/jquery.js'></script>
    <script type="text/javascript" src='js/bootstrap.js'></script>
    <title>login</title>

    <style>

    </style>
</head>


<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-offset-2 ">
                <div class="row" style="padding: 200px 100px 19px 100px;">
                    <form role="form-horizontal" method="POST" action="connexion.php">
                        <div class="form-group">
                            <label class="col-sm-3 label-control" for="motpasse">utilisateur</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user">
                                    </span>
                                </span>
                                <input type="text" class="form-control" required placeholder="E-mail" name="compte">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 label-control" for="motpasse">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock">
                                    </span>
                                </span>
                                <input type="password" class="form-control" required placeholder="Mot de passe" name="motpasse">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-log-in">
                                    </span>
                                </span>
                                <button class="btn btn-primary btn-block" type="submit" name="access" value="1">Connexion <i class="glyphicon glyphicon-check"></i></button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php
    require_once("cn.php");

    if(isset($_post['access']) && $_post["access"]=='1'){
        $Username=$_post['Username'];
        $motpass=$_post['motpass'];

    //creation d'une instance de userservice
    $userService = new UserService();

    // verification de l'utilisateur
    if ($userservice->verifierUtilisateur($Username,motpass: $motpass)){
        header(header:"location:../Etudiant/liste.php");
        exit;
    }else{
        //si les informations sont incorrectes,rediriger vers la page de connexion
        header(header:"location:../Etudiant/liste.php");

        }
 }
?>

</body>

</html>