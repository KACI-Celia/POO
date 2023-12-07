<?php


/*namespace Commerce1;

    class Command
    {
        public $nbCommand = 1;
    }


namespace Commerce2;

    class Produit
    {
        public $nbProduit = 20;
    }

class Produit // conflit car les deux "produit" sont dans le meme espace grace au nameespace
{
    public $nbProduit = 42;
}

class Command
{
    public $nbCommand = 12;
}*///--> il faut creer un namespace Commerce3 pour resoudre le probleme(comme en bas)


/* 
Namespace est un espace nommé pour nos classes. Les espaces permettent de classer nos classes.

*/

namespace Commerce1;

    class Command
    {
        public $nbCommand = 1;
    }


namespace Commerce2;

    class Produit
    {
        public $nbProduit = 20;
    }
namespace Commerce3;    

class Produit
{
    public $nbProduit = 42;
}

class Command
{
    public $nbCommand = 12;
}

?>