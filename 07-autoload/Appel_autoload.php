<?php
// cette methode d'importation peut etre utilisee si on a pas un grand nombre de fichiers( on ne peut l'utiliser quand on a plusieurs fichier) on la met en comentaire cette methode require
/* 
require_once ('A.class.php');
require_once ('B.class.php');
require_once ('C.class.php');
require_once ('D.class.php');

 */


/* 
    le but est de touver le moyen d'importer plusieurs fichiers dynamiquement( voir la fonction dans le fichier Autoload)
*/

require_once('Autoload.php');
//----------INSTANCES

$a = new A;
$b = new B;
$c = new C;
$d = new D;




?>