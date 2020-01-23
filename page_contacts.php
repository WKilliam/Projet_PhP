<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssFiles/Code.css">
<head>
	<title>Mes contacts</title>
</head>
<body>
<?php include 'header.php' ?>



<form method = "post">
<?php 

require "Formulaire.php";


$formu = new Formulaire();


	echo $formu -> getInputTypeText("<p class=textStyleSub>Nom :</p>","Nom");
    echo $formu -> getInputTypeText("<p class=textStyleSub>Prenom :</p>","Prenom");
    echo $formu -> getInputTypeText("<p class=textStyleSub>DateNaissance : </p>","JJ/MM/AA");
    echo $formu -> getInputTypeText("<p class=textStyleSub>Sexe : </p>","Sexe");
    echo $formu -> getInputTypeText("<p class=textStyleSub>Mail : </p>","Text@gmail.com");
    echo $formu -> getInputTypeText("<p class=textStyleSub>Adresse : </p>","Adresse,codePostal,Ville");
    echo $formu -> displayButton("submit", "SOUMETTRE");

?>
</form>

<?php 


echo "string22555".'<br>';
require "Personnage.php";
echo "string22".'<br>';
$perle = new Personnage("Nom","Prenom","DateNaissance","Sexe","Mail","Adresse");
echo $perle->getNom().'<br>';
echo $perle->getPrenom().'<br>';
echo $perle->getDateNaissance().'<br>';
echo $perle->getSexe().'<br>';
echo $perle->getMail().'<br>';
echo $perle->getAdresse().'<br>';

if(sizeof($_POST)>0){


$pers = new Personnage($_POST["Nom"],$_POST["Prenom"],$_POST["DateNaissance"],$_POST["Sexe"],$_POST["Mail"],$_POST["Adresse"]);

echo $pers->getNom().'<br>';
echo $pers->getPrenom().'<br>';
echo $pers->getDateNaissance().'<br>';
echo $pers->getSexe().'<br>';
echo $pers->getMail().'<br>';
echo $pers->getAdresse().'<br>';

echo $pers->getNom().'<br>';
echo $pers->getPrenom().'<br>';
echo $pers->getDateNaissance().'<br>';
echo $pers->getSexe().'<br>';
echo $pers->getMail().'<br>';
echo $pers->getAdresse().'<br>';


echo "string";
//echo $pers->getNom();
}

?>











<?php include 'footer.php' ?>
</body>
</html>