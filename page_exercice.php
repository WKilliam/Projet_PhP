<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssFiles/Code.css">
<head>
	<title></title>
</head>
<body>
<?php include 'header.php' ?>

<div>
	<?php 
		require "Formulaire.php";
		require "Calcul.php";
	?>
	<form method="post"> 
	<?php
	    echo"#US3 - afficher les nombres premiers: <br>"; 
		$myForm = new Formulaire();
		$myForm->getInputTypeText("US3 -Saisir un nombre");
		$myForm->displayButton("submit","valider");

	?>
	</form>
	<?php 
        if(sizeof($_POST)>0){
        	if ($_POST["US3_-Saisir_un_nombre"]!= NULL) {
        		$myCalcul = new Calcul();
             	$myCalcul->afficheNombresPremiers($_POST["US3_-Saisir_un_nombre"]);
        	}
        }
    ?>
    <br>
    <br>
</div>
	

<div>
    <form method="post"> 
	<?php
	    echo"#US4 - connaitre la date à laquelle à eu lieu l'événement: <br>"; 
		$myForm1 = new Formulaire();
		$myForm1->getInputTypeText("US4 -Saisir un nombre");
		$myForm1->displayButton("submit","valider");

	?>
	</form>
	<?php 
        if(sizeof($_POST)>0){
        	if($_POST["US4_-Saisir_un_nombre"]){
        		$myCalcul1 = new Calcul();
            	$myCalcul1->dateElevement($_POST["US4_-Saisir_un_nombre"]);
        	}         
        }
    ?>
    <br>
    <br>
</div>


<div>
    <form method="post"> 
	<?php
	    echo"#US5 - calculer le plus petit nombre parmis les trois saisis : <br>"; 
		$myForm5 = new Formulaire();
		$myForm5->getInputTypeText("US5 -Saisir un nombre");
		$myForm5->displayButton("submit","valider");

	?>
	</form>
	<?php 
        if(sizeof($_POST)>0){
        	if($_POST["US5_-Saisir_un_nombre"]){
        		$myCalcul5 = new Calcul();
            	$myCalcul5->calculerPetitNombre($_POST["US5_-Saisir_un_nombre"]);
        	}         
        }
    ?>
    <br>
    <br>
</div>


<div>
    <form method="post"> 
	<?php
	    echo"#US6 - connaitre la valeur d'un chiffre en chiffre Romain : <br>"; 
		$myForm6 = new Formulaire();
		$myForm6->getInputTypeText("US6 -Saisir un nombre");
		$myForm6->displayButton("submit","valider");

	?>
	</form>
	<?php 
        if(sizeof($_POST)>0){
        	if($_POST["US6_-Saisir_un_nombre"]){
        		$myCalcul6 = new Calcul();
            	$myCalcul6->chiffreRomain($_POST["US6_-Saisir_un_nombre"]);
        	}         
        }
    ?>
    <br>
    <br>
</div>


<div>
    <form method="post"> 
	<?php
	    echo"#US7 - calculer la factorielle d'un chiffre : <br>"; 
		$myForm7 = new Formulaire();
		$myForm7->getInputTypeText("US7 -Saisir un nombre");
		$myForm7->displayButton("submit","valider");

	?>
	</form>
	<?php 
        if(sizeof($_POST)>0){
        	if($_POST["US7_-Saisir_un_nombre"]){
        		$myCalcul7 = new Calcul();
            	$myCalcul7->calculerFactorielle($_POST["US7_-Saisir_un_nombre"]);
        	}         
        }
    ?>
    <br>
    <br>
</div>


<div>
    <form method="post"> 
	<?php
	    echo"#US8 - convertir une valeur en HexaDecimale : <br>"; 
		$myForm8 = new Formulaire();
		$myForm8->getInputTypeText("US8 -Saisir un nombre");
		$myForm8->displayButton("submit","valider");

	?>
	</form>
	<?php 
        if(sizeof($_POST)>0){
        	if($_POST["US8_-Saisir_un_nombre"]){
        		$myCalcul8 = new Calcul();
            	$myCalcul8->hexaDecimale($_POST["US8_-Saisir_un_nombre"]);
        	}         
        }
    ?>
    <br>
    <br>
</div>


<div>
    <form method="post"> 
	<?php
	    echo"#US9 - convertir en binaire : <br>"; 
		$myForm9 = new Formulaire();
		$myForm9->getInputTypeText("US9 -Saisir un nombre");
		$myForm9->displayButton("submit","valider");

	?>
	</form>
	<?php 
        if(sizeof($_POST)>0){
        	if($_POST["US9_-Saisir_un_nombre"]){
        		$myCalcul9 = new Calcul();
            	$myCalcul9->binaire($_POST["US9_-Saisir_un_nombre"]);
        	}         
        }
    ?>
    <br>
    <br>
</div>

</body>
</html>


