<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssFiles/Code.css">
<head>
	<title>La Poste</title>
</head>
<body>
<?php include 'src/header.php';
require "src/Request.php";
require "src/Formulaire.php";
 ?>
<?php
// On crée notre array $coordonnees
$coordonnees = array (
    'Nom' => 'Wu',
    'Prénom' => 'Yuyuan',
    'DateNaissance' => '12/34/56',
	'Sexe' => 'F',
	'Mail' =>'yw@ei.fr',
	'Adresse'=>'kjhl');
?>

<section class='contenu'>
	<?php 
	$bdd = new Request('mysql', 'localhost', 'personnes', 'root', 'root');
	$bdd->getmybdd();
	$contab=$bdd->getAllRow('personnes');
	?>
	<FORM method= "post">
	<?php 
	$formu = new Formulaire();
	echo $formu->dropdownList('Destinataire',$dest).'<br><br>';
	echo $formu->dropdownList('Expéditeur',$exp).'<br><br>';
	echo $formu->checkbox('Timbre Prioritaire').'<br>';
	echo $formu->checkbox('Confidentiel');
	?>
	</FORM>
</section>	
<?php include 'src/footer.php' ?>
</body>

	
    
    