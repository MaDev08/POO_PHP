<?php

class Livro {
    private string $titulo;
    private string $autor ;
    private int $ano_publicacao ;
    private float $preco ;

    function __construct($titulo, $autor, $ano_publicacao, $preco){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
        $this-> preco = $preco;
    }

    function getTitulo() {
        return $this->titulo; 
    }
    function getAutor() {
        return $this->autor; 
    }
    function getAnoPublicacao() {
        return $this->ano_publicacao; 
    }
    function getPreco() {
        return $this->preco; 
    }
    function setPreco($novoPreco) {
        $this->preco = $novoPreco ;
    }

}

//Criar objeto:
$livro01 = new Livro("Desnecessauros", "Lucas Guaranese", 2010, 34.90);
$livro01->setPreco(49.99);
$livro02 = new Livro("As aventuras de Tcham Tcham", "Alexandre Guimarães", 2020, 56.99);



//Mostrar os resultados: 
// "." é o comando utilizado para concatenar no PHP
echo "Autor: ".$livro01->getAutor()."\n";
echo "O novo preço do Livro1 é".$livro01->getPreco()."\n";
echo "Autor: ".$livro02->getAutor()."\n";

?>