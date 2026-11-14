
<?php

class Funcionario {
    private $salario;

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        if ($salario >= 0) {
            $this->salario = $salario;
            echo "Salário atualizado!\n";
        } else {
            echo "Erro: salário não pode ser negativo!\n";
        }
    }
}

$funcionario = new Funcionario();

$funcionario->setSalario(2500);

echo "Salário: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";

$funcionario->setSalario(-500);

?>