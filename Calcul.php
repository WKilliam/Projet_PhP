<?php

/**
 * 
 */
class Calcul
{
	

	public function afficheNombresPremiers($n){
        echo "Les nombres premiers entre 0 et ".$n." sont : ";
        $negatif = false;
        if($n<0){
            $negatif = true;
            $n = -$n;
        }
        //prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
        for($i=2;$i<=$n;$i++){
            $nbDiv = 0;//Et on compte le nombre de diviseur    
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $nbDiv++;            
                }
            }
            if($nbDiv == 2){
    //Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et
    // lui-même)
                if($negatif){
                    echo "-";
                }
                echo $i.", ";
            }
        }
    
    }
    
	public function dateElevement($n){
        $resultTime = time() + 3600 - $n;
        $mydate = date('H:i:s:n:j:Y',$resultTime);
        echo "L'événement a eu lieu le ".$mydate;
	}

	public function calculerPetitNombre($n){
        $result=999999999999999999999999999;
        // (5,6,2)
        $tab= preg_split("[/]", $n);
        // [0->5,1->6,2->2]
        foreach($tab as $value){
            switch ($value) {
                case $value<$result:
                    $result = $value;
                break;
            
                default:
                    echo "Entrez des nombres différents.";
                break;
            }
        }
        echo $result;

    }

	public function chiffreRomain($n){

	}

	public function calculerFactorielle($n){

	}

	public function hexaDecimale($n){

	}

	public function binaire($n){
		
	}
}

?>