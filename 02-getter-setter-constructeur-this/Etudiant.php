<?php

class Etudiant 
{
    private $prenom;
    /* 
        __construct: methode appellée lors de l'instanciation.
        on ne peut pas déclarer deux consctructeurs en PHP;
     */

    public function __construct($arg) //methode magique, cette methode s'execute automatiquement apres l'instanciation
    {
        echo "Instanciation ..., nous avons reçu l'information suivante: $arg \n"; //instancier= creer un objet
        $this->setPrenom($arg);// cela fonctionne mais il est preferable de passer directement par le setteur
    }

    public function setPrenom($arg)
    {
        if (is_string($arg))
        {
        $this->prenom = $arg; //!!! le 'this' est utilisable uniquement à l'interieur d'une classe
        }
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
}

$etudiant = new Etudiant("Celia");
/* 
    __constructeur est appelée automatiquement, nous mettons un arguement après le nom de la classe qui atterit directement dans le constructeur
*/
echo $etudiant->getPrenom();

//Remarque: le construct nous permet d'alleger le code et d'eviter de se repeter dans le code et mettre plus de fonctions.
?>