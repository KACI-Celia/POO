<?php


class Livraison
{
    private $adresse;
    private $dateLivraison;
    private $statut;

    public function __construct($dateLivraison, $adresse, $statut="En attente")
    {
        $this->adresse = $adresse;
        $this->dateLivraison = $dateLivraison;
        $this->statut = $statut;
    }
    }
    
    public function getterAdresse($arg1)
    {

    }
    public function setterAdresse($arg1)
    {
        if (is_string($arg1))
        {
        $this->adresse = $arg1; 
        }

    }
    public function getterDateLivraison()
    {

    }
    public function setterDateLivraison($arg2)
    {
        if (is_string($arg2))
        {
        $this->dateLivraison = $arg2; 
        }
    }
    public function getterStatut()
    {

    }
    public function setterStatut($arg3)
    {
        if (is_string($arg3))
        {
        $this->adresse = $arg3; 
        }
    }
    public function Livrer()
    {

}


$liv = new Livrer();















?>