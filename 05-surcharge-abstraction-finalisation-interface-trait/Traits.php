<?php

/* 
    Créer deux  traits (TPanier&TMembre)

Trouver le moyen de créer un trait. 

1 - Dans TPanier créer une propriété "nbProduit" qui sera égale à 1 et une méthode affichageProduits qui return "Affichage des produits". ensuite pour le deuxième trait (TMembre) ajouter une méthode affichageMembres qui return "affichage des membres !)

2 - Créer une class Site et trouver le moyen de faire hérité vos deux traits à cette class.

3 - Instancier votre class (site), puis afficher le nombre de produit et ce que return vos méthodes affichageProduits et affichageMembre, en passant par l'objet de la class instancier.
*/

trait TPanier // le trait n'est pas instanciale
{
    public $nbProduit = 1; // propriete
    public function affichageProduit() //Methode
    {
        return "Affichage des produits";
    }
}

trait TMembre
{
    public function affichageMembre() //Methode
    {
        return "Affichage des membres";
    }
}

class Site 
{
    USE TPanier;
    USE TMembre;
}
$site = new Site;
echo $site->affichageProduit();
echo $site->affichageMembre();
echo $site->nbProduit . "\n";


/* 
    - untrait n'est pas instaciable
    - les traits ont ete inventé pour repousser les limites de l'heritage.
    -> un trait est un regroupement de methode et de propriete pouvant etre importés au sein d'une classe.
    -> une classe ne peut heriter que d'une seule classe à la fois.
    -> en revanche, une classe peut importer plusieurs traits à la fois (similaire a un heritage)


*/

?>