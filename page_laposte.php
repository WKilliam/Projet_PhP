<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssFiles/Code.css">
<head>
	<title>La Poste</title>
</head>
<body>
<?php include 
require "src/Request.php";
'src/header.php';
 ?>
<section class='contenu'>
	<?php 
	$bdd = new Request('mysql', 'localhost', 'personnes', 'root', 'root');
	$bdd->getmybdd();
	$contab=$bdd->getAllRow('Contacts');

	?>
	<FORM method= "post">
	<?php 
	require "Formulaire.php";
	$formu = new Formulaire();

	echo $formu->dropdownList('Destinataire',$contab[0]).'<br><br>';
	echo $formu->dropdownList('Expéditeur',$days).'<br><br>';
	echo $formu->checkbox('Timbre Prioritaire').'<br>';
	echo $formu->checkbox('Confidentiel');
	?>
	</FORM>
</section>	

<!-- <?php include 'src/footer.php' ?> -->
</body>

	
    
    