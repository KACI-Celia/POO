<?php

class Calculette //etape 1
{

    private $number1; // etape 4 (on cree des proprietes pour qu'lles soient accessibles a n'importe quel endroit dans la classe)
    private $number2;

    public function __construct($arg1, $arg2) //etape 3 c'est le const qui va recuperer les parametres de l'etape 2
    {
        //$this->number1 = $arg1;// on remplace par le setter
        $this->setterNumber1($arg1);
        //$this->number2 = $arg2;//
        $this->setterNumber2($arg2);
    }
    public function gettNumber1()
    {
        return $this->number1;
    }
    public function gettNumber2()
    {
        return $this->number2;
    }
    public function setterNumber1($nb)
    {
        if(is_int($nb))
        {
            $this->number1 = $nb;
        }
        else{
            return false;
        }
        
    }
    public function setterNumber2($nb)
    {
        if(is_int($nb))
        {
            $this->number2 = $nb;
        }
        else{
            return false;
        }
        
    }
    public function additionner()
    {
        return $this->number1 + $this->number2;
    }

    public function soustraire()
    {
        return $this->number1 - $this->number2;
    }

    public function multiplier()
    {
        return $this->number1 * $this->number2;
    }
    public function diviser()
    {
        return $this->number1 / $this->number2;
    }


}

$calcul = new Calculette(10, 8); // etape 2
echo $calcul->additionner(). "\n";

?>