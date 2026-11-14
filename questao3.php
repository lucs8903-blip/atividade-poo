
<?php

class ContaBancaria {
    private $saldo;

    public function __construct($saldoInicial = 0) {
        $this->saldo = max(0, $saldoInicial);
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito realizado!\n";
        } else {
            echo "Valor inválido para depósito!\n";
        }
    }

    public function sacar($valor) {
        if ($valor <= 0) {
            echo "Valor inválido para saque!\n";
        } elseif ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque realizado!\n";
        } else {
            echo "Saldo insuficiente!\n";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria(500);

$conta->depositar(200);
$conta->sacar(100);

echo "Saldo atual: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";

?>