<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssFiles/Code.css">
<head>
	<title>La Poste</title>
</head>
<body>
<!-- <?php include 'header.php' ?> -->
<FORM>
<?php 
require "Formulaire.php";
$formu = new Formulaire();
echo $formu->dropdownList('Destinataire',$days).'<br><br>';
echo $formu->dropdownList('Expéditeur',$days).'<br><br>';
echo $formu->checkbox('Timbre Prioritaire').'<br>';
echo $formu->checkbox('Confidentiel');
?>
</FORM>

<!-- <?php include 'footer.php' ?> -->
</body>

	
    
    