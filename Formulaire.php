<?php

	class Formulaire{

		
		


	   	public function getInputTypeText($value,$placeholder){
	        echo '<label for="'.$value.'">'.$value.'</label>';
	        echo '<input type="text" id="'.$value.'" name="'.$value.'"placeholder='.$placeholder.'"><br>';

	    }


	    public function displayButton($action, $texte) {
	        echo '<input type="'.$action.'" id="btnvalider" value="'.$texte.'">';
	    }

	}

?>