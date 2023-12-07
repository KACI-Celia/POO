<?php

/* 
  1 - Créer une class user.✅
  2 - Créer deux private propriétés (prenom & nom).✅
  3 - Créer deux public méthodes (setPrenom & getPrenom).✅
  4 - Ajouter un argument de réception à setPrenom ✅(prénom).
  5 - Faite un return de votre private propriété (prenom), dans votre méthode (getPrenom).✅
  6 - Vérifier le type de notre paramètre (si c'est un string)
   puis Modifier la valeur de votre private propriété (prenom) dans la méthode (setPrenom) grâce à l'argument passé en paramètre.✅
  7 - Puis par exemple si vous affectez "Maria" à votre propriété et que vous appelez votre méthode getPrenom, on doit voir comme résultat "Hello Maria".✅
*/


class User //le nom de la class doit commencer par une majuscule!!!!
{
    private $prenom;
    private $nom;

    public function setPrenom($arg) 
    {
        //
        if (is_string($arg))
        {
        $this->prenom = $arg;
        }
    }   

    public function getPrenom()
    {
        /* 
            $prenom est locale, il ne s'agira pas de  la propriete private $prenom.
            return $prenom;
         */
        return $this->prenom; // "$this": ça veut dire= dans cette classe récupére moi ça
    }
}
$user = new user;
$user->setPrenom("Maria");
echo " Hello " . $user->getPrenom() . "\n";

/* 
    "$this" est une référence de la classe en cours d'utilisation.
    C'est un pointeur qui permet d'accéder aux propriétés et méthodes de l'objet à l'intérieur de la classe.
    !!! this toujours dans la class

    les getteurs (accéder) et les setteurs (affecter) permettent de controller l'intégralité des données.

    Mettre les attribus en private permet d'éviter qu'ils ne soient modifiés dans le code (il s'agit d'une bonne contrainte en d'autres terme: La déclaration des propriétés  (attributs) en tant que privés offre l'avantage d'éviter toute modification direct dans le code, instaurant ainsi une countrainte bénéfique à la sécurité et à l'intégrité des données.  

*/


?>