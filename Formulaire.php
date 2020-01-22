<?php

/**
 * 
 */
class Formulaire
{

	public function getInputTypeText($value){
    echo '<label for="'.$value.'">'.$value.'</label>';
    echo '<input type="text" id="'.$value.'" name="'.$value.'">';
	}

	public function displayButton($action,$texte){
		echo '<input type="'.$action.'" value ="'.$texte.'">';
	}


}

?>