<?php



class User
{
    private $_nom;
    private $_prenom;
    private $_age;

    public function __construct($nom, $prenom, $age)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($nom)
    {
        if(is_string($nom))
        {
            $this->_nom = $nom;
        }
        else 
        {
            return false;
        }
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->_prenom = $prenom;
        }
        else 
        {
            return false;
        }
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function setAge($age)
    {
        if(is_string($age))
        {
            $this->_age = $age;
        }
        else 
        {
            return false;
        }
    }

}

$user = new User("KACI", "Celia", "29");
echo "Nom :". $user->getNom() ."\n";
echo "Prenom :". $user->getPrenom() ."\n";
echo "Age :". $user->getAge() ."\n";


?>