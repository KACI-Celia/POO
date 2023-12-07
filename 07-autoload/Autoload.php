<?php


function inclusionAutomatique($nomDeLaClasse)
{
    require_once($nomDeLaClasse . '.class.php');
    echo "On passe dans inclusionAutomatique ! \n";
    echo "require ($nomDeLaClasse.class.php) \n";
}

spl_autoload_register('inclusionAutomatique'); //--->fonction magique (entre patentheses on doit specifier la ou il doit importer)

/* 
    spl_autoload_register('');--> cette methode permet d'executer une fonction lorsque l'interpreteur voit passer le mot 'new' dans le code.
    le nom suivi de 'new' est automatiquement transmit à la fonction inclusionAutomatique
 */






?>