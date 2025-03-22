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
        $this->quantidade = $novaQuantidade;
    }

    public function calcularValorTotal(){
        return $this->preco * $this->quantidade;
    }
}


$produto1 = new Produtos("Óleo de Peroba", 12.99, 50);

echo $produto1->exibirInformacoes(); 

$produto1->atualizarQuantidade(60);
$produto2->atualizarQuantidade(25);

//PHP_EOL = \n do HTML

echo $produto1->exibirInformacoes() . PHP_EOL;
echo "Valor total do estoque de {$produto1->nome}: R$ " . $produto1->calcularValorTotal() . PHP_EOL;
echo "Valor total do estoque de {$produto2->nome}: R$ " . $produto2->calcularValorTotal() . PHP_EOL;

?>
