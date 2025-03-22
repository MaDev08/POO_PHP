<?php

class Funcionarios {
    public $nome;
    protected $salario;
    private $senha;


    function __construct($nome, $salario, $senha) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->senha = $senha;
    }

    // Exibir nome e salário, eu errei na lógica pois defini os parâmetros e não deixei para exibir as informações
    public function exibirInformacoes() {
        return "Nome: {$this->nome}, Salário: R$ {$this->salario}\n";
    }

    
    public function getterSalario() {
        return $this->salario;
    }

    
    public function setterSenha($senha) {
        $this->senha = $senha;
    }

    
    public function setSalario($novoSalario) {
        $this->salario = $novoSalario;
    }


    public function aumentarSalario($percentual) {
        $this->salario += ($this->salario * $percentual / 100);
    }
}


$funcionario = new Funcionarios("João", 1200, "123456");

// Atualizar salário
$funcionario->setSalario(1500);

// Alterar a senha
$funcionario->setterSenha("nova_senha");

// Aumentar salário em 20%
$funcionario->aumentarSalario(20);

echo $funcionario->exibirInformacoes(); // Nome e salário atualizados

echo "O salário do funcionário é de: R$ " . $funcionario->getterSalario() . "\n";

?>
