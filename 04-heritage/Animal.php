<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me deplace";    
    }
    public function mange()
    {
        return "Je mange chaque jour";
    }
}
class Elephant extends Animal // on ne peut mettre qu'un seul extends dans une classe
{
    public function quiSuiJe()
    {
        return "Je suis un elephant et " .$this->deplacement();
    }
}
class Chat extends Animal // extend permet l'heritage(la class 'chat' herite de la class 'animal')
{
    public function quiSuisJe()
    {
        return " je suis un chat";
    }
    public function mange()
    {
        return "je mange comme un chat";
    }
}

// USE classe Elephant
// 1 - afficher "je mange chaque jour"
// 2 - afficher "Je suis un Elephant et je me deplace"

$eleph = new Elephant; //pour istancer une classe le 'new' est obligé
echo $eleph->mange(). "\n";


echo $eleph->quiSuiJe() ."\n";// pour afficher "je suis un elephant et je me deplace"


//$eleph->quiSuiJe(); . "". $eleph->deplacement(;)// cela ne fonctionne pas car deplacement est dans protected


// Use classe Chat
// 1 - afficher "je mange comme un chat
// 2 - afficher "Je suis un chat"
$chat = new Chat; // il n'ya pas de conflit entre les objets
echo $chat->mange() ."\n"; //ça va chercher mange dans la class chat(enfant)la class en cours est prioritaire car l'objet a été creer dans cette classe

echo $chat->quiSuisJe();

?>