<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssFiles/Code.css">
<head>
	<title></title>
</head>
<body>
<?php include 'header.php' ?>

	<?php require "Formulaire.php" ?>
	<form method="post"> 
	<?php
		$myForm = new Formulaire();
		$myForm->getInputTypeText("Saisir un nombre");
		$myForm->displayButton("submit","valider");

	?>
	</form>
	<?php 
		require "Calcul.php";
        if(sizeof($_POST)>0){
            $myCalcul = new Calcul();
            $myCalcul->afficheNombresPremiers($_POST["Saisir_un_nombre"]);
        }
    ?>


</body>
</html>


