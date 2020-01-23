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

echo "avant<br>";


require "CheckError.php";
require "Personnage.php";

$checking = new CheckError();

$str = str_split($_POST["Mail"]);
echo $str[0]."<br>";

for ($i=0; $i <strlen($_POST["Mail"]) ; $i++) { 
	echo $str[i]."<br>";
	echo "toto<br>";
}

echo $checking->checkMail(strlen($_POST["Mail"]),$str);



echo "aprés<br>";







if(sizeof($_POST)>0){

$pers = new Personnage($_POST["Nom"],$_POST["Prenom"],$_POST["DateNaissance"],$_POST["Sexe"],$_POST["Mail"],$_POST["Adresse"]);


echo $pers->checkMailValue();
echo $pers->getNom().'<br>';
echo $pers->getPrenom().'<br>';
echo $pers->getDateNaissance().'<br>';
echo $pers->getSexe().'<br>';
echo $pers->getMail().'<br>';
echo $pers->getAdresse().'<br>';
}



?>



<?php include 'footer.php' ?>
</body>
</html>