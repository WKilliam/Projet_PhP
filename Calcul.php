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

	public function chiffreRomain($num){

     
        // Vérification de l'entier
          $n = intval($num);
          $res = '';

          // Declaration du tableau
          $tabDecEnRom = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
          'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
          'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1,'II'=>2,'III'=>3,'VI'=>6,'VII'=>7,'VIII'=>8);
         
         
        // Boucle de convertion			
          	foreach ($tabDecEnRom as $romain => $valeur) 
          {
              $trouver = intval($n / $valeur);
              
              $n = $n % $valeur;
              $res = str_repeat($romain, $trouver);
              echo $res;

              //echo $romain;
             
          }
          
	}

	public function calculerFactorielle($n){
        $result=1;
        for($i=1;$i<=$n;$i++){
            $result*=$i;
        }
        echo $result;
	}

	public function hexaDecimale($n){
        $resTab;
        $i=0;
        while((int)($n/16)>=1){
            $resTab[$i]=$n%16;
            $n=(int)($n/16);
            $i++;
        }
        if ($n>9){
            switch($n){
                case $n=10:
                    $n=A;
                break;

                case $n=11:
                    $n=B;
                break;

                case $n=12:
                    $n=C;
                break;

                case $n=13:
                    $n=D;
                break;

                case $n=14:
                    $n=E;
                break;

                case $n=15:
                    $n=F;
                break;
            }
        }
        echo $n;
        if(sizeof($resTab)>0){
            for($j=$i;$j>=0;$j=$j-1){
                if($resTab[$j]>9){
                    switch($resTab[$j]){
                        case $resTab[$j]=10:
                            $resTab[$j]=A;
                        break;

                        case $resTab[$j]=11:
                            $resTab[$j]=B;
                        break;

                        case $resTab[$j]=12:
                            $resTab[$j]=C;
                        break;

                        case $resTab[$j]=13:
                            $resTab[$j]=D;
                        break;

                        case $resTab[$j]=14:
                            $resTab[$j]=E;
                        break;

                        case $resTab[$j]=15:
                            $resTab[$j]=F;
                        break;
                    }
                }
                echo $resTab[$j]; 
            }
        }
	}

	public function binaire($n){
        $resTabb="";
        
        if ($n>0){
            for($i=0;(int)($n/2)>=1;$i=$i+1){
                $resTabb[$i]=$n%2;
                $n=(int)($n/2);
            }
            echo $n;
            for($j=$i;$j>=0;$j=$j-1){
            echo $resTabb[$j];
            }
        }
	}

	public function checkMail($mail){

		if(strlen($mail)>=3){
			
			if(strstr($mail,'@')){ //dans la chaine $mail contien le @

				if(strstr($mail,'.')){ //dans la chaine $mail contien le .
					echo "Votre mail est valide.";
				}else{
					echo "Votre mail n'est pas valide, il n'y a pas de '.' derrière la lettre '@' dans votre mail.";
				}
			}else{
				echo "Votre mail n'est pas valide, il n'y a pas de la lettre '@' dans votre mail.";
			}

		}else{
			echo "Votre mail n'est pas valide, il y a moins de 3 caractères.";
		}
	}

	public function checkDate($date){
		if (preg_match('/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{2}$/', $date)) {
    		echo "votre date de naissance est validé.";
		} else {
    		echo "votre date de naissance n'est pas validé.";
		}
	}

	public function triNom($n){
		echo "stirng";
	}
}

?>