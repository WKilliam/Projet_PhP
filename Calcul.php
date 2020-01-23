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
        $dateTab= preg_split("[:]",$mydate);
        echo "L'événement a eu lieu le ".$dateTab[4]."/".$dateTab[3]."/".$dateTab[5]." à ".$dateTab[0]."h".$dateTab[1]."min".$dateTab[2]."s.";
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
                break;
            }
        }
        echo "Le plus petit nombre est ". $result.".";

    }

	public function chiffreRomain($n){

	}

	public function calculerFactorielle($n){
        $result=1;
        for($i=1;$i<=$n;$i++){
            $result*=$i;
        }
        echo "La factorielle de ".$n." est ".$result.".";
	}

	public function hexaDecimale($n){
        $A=10;
        $B=11;
        $C=12;
        $D=13;
        $E=14;
        $F=15;
        $resTab="";
        $i=0;
        while((int)$n/16>=1){
            $resTab[i]=$n%16;
            $n=(int)$n/16;
            $i++;
        }
        echo $resTab;

	}

	public function binaire($n){
        $resTabb="";
        $i=0;
        while($n==0){
            $resTabb[i]=$n%2;
            $n=(int)$n/2;
            $i++;
        }
        for($i=sizeof($resTabb)-1;$i=0;$i--){
            echo $resTabb[i];
        }
		
	}
}

?>