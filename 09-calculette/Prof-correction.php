<?php

class Calculette
{

  private $number1;
  private $number2;

  public function __construct($arg1 , $arg2)
  {
    $this->setterNumber1($arg1);
    $this->setterNumber2($arg2);
  }

  public function getterNumber1()
  {
    return $this->number1;
  }

  public function getterNumber2()
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
$calcul = new Calculette(20, 7);
echo $calcul->additionner(). "\n";

