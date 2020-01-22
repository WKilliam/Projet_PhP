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


	echo $formu -> getInputTypeText("<p class=textStyleSub>nom :</p>");
    echo $formu -> getInputTypeText("<p class=textStyleSub>prenom :</p>");
    echo $formu -> getInputTypeText("<p class=textStyleSub>age : </p>");
    echo $formu -> displayButton("submit", "soumettre tous");

?>
</form>

<?php 

if(sizeof($_POST)>0){

$pers = new Personne($_POST["nom"],$_POST["prenom"],$_POST["age"]);
echo $pers->getNom();


}

?>











<?php include 'footer.php' ?>
</body>
</html>