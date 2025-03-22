<?php
    
    class Produtos{
       public string $nome;
       public float $preco;
       public int $quantidade;

       public function __construct($nome, $preco, $quantidade){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }

        public function exibirInformacoes(){
            return "Nome: {$this->nome}, preço: {$this->preco}, quantidade: {$this->quantidade}";
        }

        public function atualizarQuantidade($novaQuantidade){
            $this-> quantidade = $novaQuantidade;
        }

        public function calcularValorTotal(){
            return $this->preco * $this->quantidade;
        }
    }

//É preciso passar o valor dos parâmetros do consstrutor no objeto SEMPRE!!!
$produto = new Produtos("óleo de  peroba", 12.99, 50);
    

?>