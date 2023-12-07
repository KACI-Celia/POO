<?php

class A
{
    public function calcul()
    {
        return 10;
    }
}

class B extends A
{
    public function calcul() // on redefinie la methode(on a surcharger) 'calcul'
    {
        /* 
            Surchage (Override).
            je n'utilise pas $this->calcul sinon elle sera récursive et la methode s'appelera en boucle.
            "parent::" fonctionne pour appeller une methode d'une classe parent LORs d'une surchage(afin d'eviter qu'elles ne s'apelle pas elle-même) car elle est redefinie...
        */
        //VERSION SANS {}
        $nb = parent::calcul();
        if($nb<=100) return "$nb est inferieur ou egal à 100 \n";
        else return "$nb est superieur à 100 \n";
        //VERSION AVEC {}
        if ($nb<=100){
            return "$nb est inferieur ou egal à 100 \n";
        }
        else {
            return "$nb est superieur à 100 \n";
        }
    }
    public function autreCalcul()
    {
        parent::calcul();
    }
    /* 
        il est possible d'atteindre une methode de ma classe parent, même s'il n y a pas de redefinition(surcharge).
    */
}

$objet = new B;
echo $objet->calcul();



?>