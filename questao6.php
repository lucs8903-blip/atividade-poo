
<?php

class Veiculo {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirDados() {
        echo "Marca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
    }
}

class Carro extends Veiculo {
    public $quantidadePortas;

    public function __construct($marca, $modelo, $quantidadePortas) {
        parent::__construct($marca, $modelo);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Portas: " . $this->quantidadePortas . "\n";
    }
}

class Moto extends Veiculo {
    public $cilindradas;

    public function __construct($marca, $modelo, $cilindradas) {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Cilindradas: " . $this->cilindradas . " cc\n";
    }
}

$carro = new Carro("Toyota", "Corolla", 4);
$moto = new Moto("Honda", "CG 160", 160);

echo "=== CARRO ===\n";
$carro->exibirDados();

echo "\n=== MOTO ===\n";
$moto->exibirDados();

?>