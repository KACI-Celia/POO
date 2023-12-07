<?php


class Ippo
{
    private $_name;
    private $_stamina;
    private $_speed;
    private $_strength;

    public function __construct($name, $stamina, $speed, $strength)
    {
        $this->setNAme($name);
        $this->setStamina($stamina);
        $this->setSpeed($speed);
        $this->setStrenghth($strength);
    }    
    public function getName()
    {
        return $this->_name;
    }
    public function setNAme($name)
    {
        if(is_string($name))
        {
            $this->_name = $name;
        }
    }
    public function getStamina()
    {
        return $this->_stamina;
    }
    public function setStamina($stamina)
    {
        if(is_string($stamina))
        {
            $this->_stamina = $stamina;
        }
    }
    public function getSpeed()
    {
        return $this->_speed;
    }
    public function setSpeed($speed)
    {
        if(is_string($speed))
        {
            $this->_speed = $speed;
        }
    }
    public function getStrength()
    {
        return $this->_strength;
    }
    public function setStrenghth($strength)
    {
        if(is_string($strength))
        {
            $this->_strength = $strength;
        }
    }
}
$ippo = new Ippo("Ippo", "20762", "90", "1721");
echo "Name :". $ippo->getName() ."\n";
echo "Stamina :". $ippo->getStamina() ."\n";
echo "Speed :". $ippo->getSpeed() ."\n";
echo "Strength :". $ippo->getStrength() ."\n";


?>