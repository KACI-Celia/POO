<?php

require_once("Ippo.php");
require_once("Challenger.php");


class Fight
{
    public function fighting($ippo, $challenger)
        {
            $staminaIppo = $ippo->_stamina;
        $staminaChallenger = $challenger->_stamina;// cette methode nous permet de recuperer la valeur de notre stamina actuelle de Ippo et celle du challengers(ce sont ces deux variables qui vont changer pendant le combat)
        for($round=1; $round<=10; $round++){ //on peut mettre $round=1 ou =0 mais de preference=1
            echo "Round $round . \n";
            if($ippo->_speed > $challenger->_speed)
            {
                $staminaChallenger = $staminaChallenger - $ippo->_strength;  // ici le Ippo frappe en premier, donc la force du challenger diminue
                echo "Ippo frappe en premier" . $staminaChallenger . "\n";
                if($staminaChallenger<=0) 
                {
                    echo "Ippo a gagné \n";
                }
                else{
                    $staminaIppo = $staminaIppo -$challenger->_strength;//  // si le challenger n'est pas mort(stamina pas finie), le cambat continue
                    echo "le combat continu . $staminaIppo .\n";
                }
            }
            if($staminaChallenger ==0 || $staminaIppo ==0)
            { 
                echo "le combat est fini ! \n";
            }
            else
            {
                $strenght =_strength*2
                echo "coup fatal  \n";
            }
        }
        
    }
}
$fight = new fight;

$fight->fighting($ippo, $challenger);


?>