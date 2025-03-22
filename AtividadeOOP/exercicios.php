<?php

class Livro {
    private $titulo;
    private $autor ;
    private $ano_publicacao ;
    private $preco ;

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
$livro02 = new Livro("As aventuras de Tcham Tcham", "Alexandre Guimarães", 2020, 56.99);


//Mostrar os resultados: 

echo ''
