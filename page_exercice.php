<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssFiles/Code.css">
<head>
	<title></title>
</head>
<body>
<?php
require "src/Formulaire.php";
require "src/Calcul.php";
include 'src/header.php';
 ?>
<section class='contenu'>
	<div>
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
				if($_POST["US4_-Saisir_un_nombre"]!= NULL){
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
				if($_POST["US5_-Saisir_un_nombre"]!= NULL){
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
				if($_POST["US6_-Saisir_un_nombre"]!= NULL){
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
				if($_POST["US7_-Saisir_un_nombre"]!= NULL){
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
				if($_POST["US8_-Saisir_un_nombre"]!= NULL){
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
				if($_POST["US9_-Saisir_un_nombre"]!= NULL){
					$myCalcul9 = new Calcul();
					$myCalcul9->binaire($_POST["US9_-Saisir_un_nombre"]);
				}         
			}
		?>
		<br>
		<br>
	</div>


	<div>
		<form method="post"> 
		<?php
			echo"#US10.1 - check si ton mail est valide : <br>"; 
			$myForm101 = new Formulaire();
			$myForm101->getInputTypeText("Saisir ton mail");
			$myForm101->displayButton("submit","valider");

		?>
		</form>
		<?php 
			if(sizeof($_POST)>0){
				if($_POST["Saisir_ton_mail"]){
					$myCalcul101 = new Calcul();
					$myCalcul101->checkMail($_POST["Saisir_ton_mail"]);
				}         
			}
		?>
		<br>
		<br>
	</div>

	<div>
		<form method="post"> 
		<?php
			echo"#US10.2 - check si ta date de naissance est valide : <br>"; 
			$myForm102 = new Formulaire();
			$myForm102->getInputTypeText("Saisir la date de naissance");
			$myForm102->displayButton("submit","valider");

		?>
		</form>
		<?php 
			if(sizeof($_POST)>0){
				if($_POST["Saisir_la_date_de_naissance"]){
					$myCalcul102 = new Calcul();
					$myCalcul102->checkDate($_POST["Saisir_la_date_de_naissance"]);
				}         
			}
		?>
		<br>
		<br>
	</div>

	<div>
		<form method="post"> 
		<?php
			echo"#US11 - Trier un tableau de nom à partir du seconde carectère : <br>"; 
			$myForm11 = new Formulaire();
			$myForm11->getInputTypeText("US11 -Saisir les prenoms");
			$myForm11->displayButton("submit","valider");

		?>
		</form>
		<?php 
			if(sizeof($_POST)>0){
				if($_POST["US11_-Saisir_les_prenoms"]){
					$myCalcul11 = new Calcul();
					$myCalcul11->triNom($_POST["US11_-Saisir_les_prenoms"]);
				}         
			}
		?>
		<br>
		<br>
	</div>
</section>
<?php include 'src/footer.php' ?>
</body>
</html>


