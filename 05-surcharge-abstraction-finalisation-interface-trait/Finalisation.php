<?php

final class Application //cette methode permet de preserver des donnees (par exemple donnees des patients)
{
    public function lancementApplication ()
    {
        return "l'application se lance comme cela ";
    }
}

$application = new Application; // la classe est instanciable(cette methode fonctionne)
echo $application->lancementApplication();

/* 

    class Extention extends Application{}-->ne fonctionne pas= ERREUR car les classes finales ne peuvent pas être héritées

*/

class Application2
{
    final public function lancementApplication ()
    {
        return "l'application se lance comme cela ";
    }
}

class Extention2 extends Application2
{
    //public function lancementApplication(){}
    //--> pas possible car on ne peut pas surcharger les classes heritieres
}
/* 
    -une classe finale ne peut pas être heritée.
    -une methode finale permet d'eviter qu'elle soit redefinie ou surcharger.
    -l'interet de mettre un mot-cle "final" sur une methode est de la verouiller afin d'empecher toute sous-classe de la redefinir. (Quand nous voulons etre sur que le comportement d'une methode soit preservé durant l'heritage)

*/




?>