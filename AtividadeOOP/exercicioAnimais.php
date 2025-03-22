<?php

abstract class Animal {

    private string $nome;
    private int $idade; 

    public function __construct($nome, $idade){
        $this->nome=$nome; 
        $this->idade=$idade; 
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getIdade(){
        return $this->idade;
    }
    
    //Metódo abstrato, pois ele não tem um valor e irá servir somente como um exemplo para as classes filhas na hora da HERANÇA.
    abstract function fazerSom();
}
    
 class Cachorro extends Animal{
     function fazerSom() {
         echo "Auau!!!";
    }
}

class Gato extends Animal{
    echo fazerSom(){
        echo "Miaaauuuu!!!";
    }
}

$cachorro = new Cachorro("Salsicha", 9);
$cachorro->fazerSom();

$gato = new Gato("Mimo", 4);
$gato->fazerSom();


echo "O nome do cachorro é " . $cachorro->getNome() . "\n";
echo "A idade do cachorro é " . $cachorro->getIdade() . "\n";
echo "O som que ele faz é " . $cachorro->fazerSom() . "\n";

echo "O nome do gato é " . $gato->getNome() . "\n";
echo "A idade do gato é " . $gato->getIdade() . "\n";
echo "O som que ele faz é " . $gato->fazerSom(); . "\n"

?>