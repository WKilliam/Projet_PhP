<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssFiles/Code.css">
<head>
	<title>Mes contacts</title>
</head>
<body>
<?php 
require "src/Formulaire.php";
require "src/Calcul.php";
require "src/Personnage.php";
require "src/Request.php";
include 'src/header.php';
 ?>
<section class='contenu'>
    <form method = "post">
    <?php 

    $formu = new Formulaire();
        echo $formu -> getInputTypeText("Nom");
        echo $formu -> getInputTypeText("Prenom");
        echo $formu -> getInputTypeText("DateNaissance");
        echo $formu -> getInputTypeText("Sexe");
        echo $formu -> getInputTypeText("Mail");
        echo $formu -> getInputTypeText("Adresse");
        echo $formu -> displayButton("submit", "SOUMETTRE");
    ?>
    </form>
    <?php 
    $checking = new Calcul();
    $verify =$checking->checkMail($_POST["Mail"]);
    $bdd = new Request('mysql', 'localhost', 'personnes', 'root', 'root');
    $bdd->getmybdd();
    if($verify==true){
        if(sizeof($_POST)>0){
            $pers = new Personnage($_POST["Nom"],$_POST["Prenom"],$_POST["DateNaissance"],$_POST["Sexe"],$_POST["Mail"],$_POST["Adresse"]);
            echo '<br>Vous avez créé le contact: <br>'.$pers->getNom().'<br>';
            echo $pers->getPrenom().'<br>';
            echo $pers->getDateNaissance().'<br>';
            echo $pers->getSexe().'<br>';
            echo $pers->getMail().'<br>';
            echo $pers->getAdresse().'<br>';
            $bdd->setInsert($pers->getNom(),$pers->getPrenom(), $pers->getDateNaissance(), $pers->getSexe(), $pers->getMail(), $pers->getAdresse());
            echo "toto";
        }
    }else{
        echo "Veuillez réessayer SVP.";
    }
    return $bdd;
    ?>
</section>   
<?php include 'src/footer.php' ?>
</body>
</html>