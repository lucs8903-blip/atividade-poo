
<?php

class Forma {
    public function calcularArea() {
        return 0;
    }
}

class Retangulo extends Forma {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

class Circulo extends Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * ($this->raio ** 2);
    }
}

$retangulo = new Retangulo(5, 10);
$circulo = new Circulo(3);

echo "Área do retângulo: " . $retangulo->calcularArea() . "\n";
echo "Área do círculo: " . number_format($circulo->calcularArea(), 2, ',', '.') . "\n";

?>