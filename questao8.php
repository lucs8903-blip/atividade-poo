
<?php

class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus() {
        return 0;
    }
}

class Vendedor extends Funcionario {
    public function calcularBonus() {
        return $this->salario * 0.10;
    }
}

class Gerente extends Funcionario {
    public function calcularBonus() {
        return $this->salario * 0.20;
    }
}

$vendedor = new Vendedor("João", 3000);
$gerente = new Gerente("Carlos", 5000);

echo "=== BÔNUS DOS FUNCIONÁRIOS ===\n";

echo "Vendedor: R$ " . number_format($vendedor->calcularBonus(), 2, ',', '.') . "\n";

echo "Gerente: R$ " . number_format($gerente->calcularBonus(), 2, ',', '.') . "\n";

?>