<?php

namespace General;
// Importer les Name Space, Commerce1, Commerce2, Commerce3 du fichier inclus.
require_once("Namespace_commerce.php"); //rappel: le require_once s'assure que le fichier est importé une fois, s'il ya une erreur il s'arrete--> cette manip nous permet de rapporter la page de <Namespace_commerce.php

//Affiche le nom de l'espace de noms actuel
USE Commerce1, Commerce2, Commerce3; //! le 'USE' est important pour utiliser notre namespace
use Commerce1\Command;

echo __NAMESPACE__ ."\n";

// on cree un nouvel objet en instanciant la classe 'command' du namespace 'commerce1'.
$command = new Commerce1\Command; //on ne peut pas mettre "new Command" car elle existe en plusieurs fois
$produit = new Commerce2\Produit;

$produit2 = new Commerce3\Produit;
$command2 = new Commerce3\Command;


echo $command->nbCommand . "\n"; //->affichage des proprietes des classes

echo $produit->nbProduit . "\n";

echo $produit2->nbProduit . "\n";

echo $command2->nbCommand . "\n";

?>