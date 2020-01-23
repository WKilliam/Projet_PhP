<?php

	class Formulaire{

		
		


	   	public function getInputTypeText($value){
	        echo '<label for="'.$value.'">'.$value.'</label>';
	        echo '<input type="text" id="'.$value.'" name="'.$value.'"><br>';

		}
		
		public function dropdownList($value,$tab){
			echo '<label for="'.$value.'">'.$value.'</label><br>';
			echo '<SELECT name="'.$value.'" size="1">';
			foreach($tab as $opt){
				echo '<OPTION>'.$opt;
			}
			echo '</SELECT>';

		}
		
		public function checkbox($value){
	        echo '<label for="'.$value.'">'.$value.'</label>';
	        echo '<input type="checkbox" name="'.$value.'" value="'.$value.'"><br>';

		}

	    public function displayButton($action, $texte) {
	        echo '<input type="'.$action.'" id="btnvalider" value="'.$texte.'">';
	    }

	}

?>