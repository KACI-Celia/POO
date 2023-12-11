<?php

require_once("Ippo.php");
require_once("Challenger.php");


class Fight
{
    public function fighting($ippo, $challenger)
    {
        $round=10;
        for($round=1; $round<=10; $round++){
            echo "Round $round . \n";
        }
        $staminaIppo = $ippo->stamina - $challenger->strength;
        $staminaChallenger = $challenger->stamina - $ippo->strength;
    }
}



?>