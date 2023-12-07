<?php


class Coordonnes // ✅ (je l'ai reussi toute seule!!!)
{
    private $nom;
    private $prenom;
    private $age;
    public function __construct($arg1, $arg2, $arg3)//le construct va appeler les setter
    {
        echo "voici mes informations personnelles \n";
        $this->setterNom($arg1);
        $this->setterPrenom($arg2);
        $this->setterAge($arg3);
    }

    public function getNom()
    {
        {
            return $this->nom;
        }
    }
    public function setterNom($arg1)
    {
        if (is_string($arg1))
        {
        $this->nom = $arg1; 
        }
        else
        {
            return "False";
        }
    }
    public function getPrenom()
    {
        {
            return $this->prenom;
        }
    }
    public function setterPrenom($arg2)
    {
        if (is_string($arg2))
        {
        $this->prenom = $arg2; 
        }
        else
        {
            return "False";
        }
    }
    public function getAge()
    {
        {
            return $this->age;
        }
    }
    public function setterAge($arg3)
    {
        if (is_string($arg3))
        {
        $this->age = $arg3; 
        }
        else
        {
            return "False";
        }
    }
}
$coor= new Coordonnes("KACI ", "Celia ", "29 ");

echo "Nom " . $coor->getNom() . "\n";
echo "Prenom " . $coor->getPrenom() . "\n";
echo "Age " . $coor->getAge() . "\n";












?>