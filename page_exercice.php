<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	require "Formulaire.php";
	?>
	<form> 
	<?php
		$myForm = new Formulaire();
		$myForm->getInputTypeText("Saisir un nombre: ");
		$myForm->displayButton("submit","valider");

	?>
	</form>


</body>
</html>


