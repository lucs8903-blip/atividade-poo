
<?php

class Animal {
    private $idade;

    public function __construct($idade) {
        $this->setIdade($idade);
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        if ($idade >= 0) {
            $this->idade = $idade;
        } else {
            echo "Idade inválida!\n";
        }
    }

    public function fazerBarulho() {
        echo "O animal faz um som.\n";
    }
}

class Cachorro extends Animal {
    public function fazerBarulho() {
        echo "O cachorro faz: Au au!\n";
    }
}

class Gato extends Animal {
    public function fazerBarulho() {
        echo "O gato faz: Miau!\n";
    }
}

class Passaro extends Animal {
    public function fazerBarulho() {
        echo "O pássaro faz: Piu piu!\n";
    }
}

$cachorro = new Cachorro(3);
$gato = new Gato(2);
$passaro = new Passaro(1);

echo "=== ZOOLÓGICO ===\n";

$cachorro->fazerBarulho();
echo "Idade: " . $cachorro->getIdade() . " anos\n";

$gato->fazerBarulho();
echo "Idade: " . $gato->getIdade() . " anos\n";

$passaro->fazerBarulho();
echo "Idade: " . $passaro->getIdade() . " anos\n";

?>