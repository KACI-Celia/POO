<?php

class Panier // la class
{
public $nbProduit; //proprièté (une proprité public est accessible dans la class et en dehors de la class)
private $nbProduit2; // éme propriété( elle est accessible uniquement dans la class)

public function ajouterArticle($arg) // <--méthode
    {// Traitement
        return "l'article a été ajouté $arg \n";
    }

    protected function retirerArticle($arg) //<-- Méthode
    {
        return" l'article a été retiré $arg\n";// protected permet à la methode d'etre accessible dans la classe en elle même et à la classe enfant
    }

    private function afficheArticle() // <-- méthode
    {
        return "Voici les articles \n";
    }

}

/*

    "new" est un mot clef permettant d'effectuer une instanciation(objet).
    une class peut produire plusioeurs objets.
    Nous pouvons donc effectuer plusierus instanciations 'new'.
*/
$panier = new panier;
$panier->nbProduit = 5; // le "5" affecte juste cet objet la et pas le 'nbproduit' de la class
echo "panier $panier->nbProduit produits \n"; //la on est sur une proprièté publique, donc ça va fonctionner


echo $panier->ajouterArticle("jean") ."\n";// la méthode est publique

/*echo $panier->retirerArticle("chemise") ."\n";
//--> ça nous met une erreur(ne fonctionne pas), car la méthode est protégee par "protected". l'élément est accessible uniquement dans la classe*/

/*echo $panier->afficheArticle()."\n";// 
methode private, cela ne fonctionne pas, on a une erreur. l'element est accessible uniquement dans la class Panier)*/

echo "****-------------***\n";

$panier2 = new Panier;
$panier2->nbProduit= 05;

$panier3 = new Panier;
$panier3->nbProduit = 29;

echo "panier2 $panier2->nbProduit produits\n";

echo "panier3 $panier3->nbProduit produits \n";

/* 
    Niveau de visibilté:
    -public: accessible de partout
    -protected: accessible uniquement dans la classe ou elle a été déclaré et a  aussi dans les classes héritières.
    -private: accessible uniquement dans la classe ou elle a été dédlaré.
*/







?>