<?php

/* 
    Ennonce code avant debugage:
    <?php

session_start(); // genere une session

if(isset($_GET['action']) && $_GET['action'] == "create" || isset($_SESSION['panier']))
{
  $_SESSION['panier'] = array(26,27,28); // stock dans la session
  echo 'Produit présent dans le panier : ' . implode('-', $_SESSION['panier']) . '<br />';
  // implode Rassemble les éléments d'un tableau en une chaine 
  // Place entre les "-" entre les élements.
  echo '<a href="?action=vider"> Vider le panier</a>';
}
else
{
  echo '<a href="?action=create">Créer le panier</a>';
}
if(isset($_GET['action']) && $_GET['action'] == "vider")
{
  unset($_SESSION['panier']); // vide la session 
}

*/

session_start(); // genere une session
// verfie si action existe et si elle est == à create

if(isset($_GET['action']) && $_GET['action'] == "vider")
// on verifie si 'action' existe et si son action est 'vider'
{
  unset($_SESSION['panier']); // vide la session 
}
/* 
    on a du deplacer le :if(isset($_GET['action']) && $_GET['action'] == "vider")
// on verifie si 'action' existe et si son action est 'vider'
{
  unset($_SESSION['panier']); // vide la session 
}
--> car si il va en deuxieme position, il y aura un bug sur la page de navigation, car il passe par le 2 eme if auomatiquement car (||isset($_SESSION['panier']) est actif.
la solution est de mettre notre if en 1er lieu
*/
if(isset($_GET['action']) && $_GET['action'] == "create" || isset($_SESSION['panier']))
{
  $_SESSION['panier'] = array(26,27,28); // stock dans la session
    echo 'Produit présent dans le panier : ' . implode ('-', $_SESSION['panier']) . '<br />';
  // implode Rassemble les éléments d'un tableau en une chaine (il va mettre un tiret entre chasque elem du tableau)
  // Place entre les "-" entre les élements.
    echo '<a href="?action=vider"> Vider le panier</a>';// quand on appui sur vider la panier, dans l'url create sera remplacer par vider
}
else
{
    echo '<a href="?action=create">Créer le panier</a>';
}

