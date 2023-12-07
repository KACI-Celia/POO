<?php

class Maison
{
    private static $nbPiece = 7; // Appartient à la classe.
    public static  $espaceTerrain = "500m²"; //cela permet d'avoir cette propriete pour toutes les instances-->appartient à la classe(ceci est modifiable)
    const HAUTEUR = "10m";// appartient à la classe (on ne peut pas la modifie)

    public $color = "red"; // appartient à l'objet.
    private $nbPorte = 10; // appartient à l'objet.

    public static function getNbPiece()
    {
        return self::$nbPiece;// retouner ce qui est à la classe dans la classe
        // :: est l'equivalent de la flechec->()
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
    }
}
echo Maison::getNbPiece() . "\n"; // j'appelle une methode de ma classe par ma classe.
echo Maison::$espaceTerrain . "\n"; //j'appelle une propriete de ma classe par ma classe.
echo Maison::HAUTEUR . "\n";

Maison::$espaceTerrain= "100m²"; // quand on modofie une propriete statique , ça impacte l'ensemble des objets
//objet 1
$maison = new Maison;
$maison->getNbPorte();
//objet 2
$maison2 = new Maison;
$maison2->color = "Yellow"; // cette modification impactera que la maison2 car la modification a ete porté que pour l'objet 2

/* 
    Précision:
        static indique qu'un élement appartient à la classe (dans le cas d'une propriete , c'est  variable).
        const indique qu'un Élément appartient à la classe (dans le cas d'une propriété, c'est constant, non variable)
        une propriete Statique peut tout à fait changer de valeur au cours du temps à la différence d'une constante tente la valeur est fixée.
Statique peut tout à fait changer de valeur au cours du temps à la différence d'une constante tente la valeur est fixée.
simplement, La valeur d'une propriété statique sera partagée par tous les objets issus de la classe dans laquelle a été identifiée.


    operateur : 

        -$objet-> recuperer l'element d'un objet à l'exterieur de la classe.
        -$this-> permet de recuperer un element d'un objet à l'interieur de la classe.

        -class::element d'une classe à l'exterieur de la classe.
        -self:: element d'une classe à l'interieur de la classe. ->propre à la classe (#et le this est propre à l'objet)

*/

?>