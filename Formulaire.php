<?php

	class Formulaire{

		
		


	   	public function getInputTypeText($value){
	        echo '<label for="'.$value.'">'.$value.'</label>';
	        echo '<input type="text" id="'.$value.'" name="'.$value.'"><br>';

	    }


	    public function displayButton($action, $texte) {
	        echo '<input type="'.$action.'" id="btnvalider" value="'.$texte.'">';
	    }

	}

?>