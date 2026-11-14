<?php

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function aplicarDesconto($porcentagem) {
        if ($porcentagem < 0 || $porcentagem > 100) {
            echo "Desconto inválido!\n";
            return;
        }

        $this->preco -= $this->preco * ($porcentagem / 100);

        echo "Produto: " . $this->nome . "\n";
        echo "Desconto: " . $porcentagem . "%\n";
        echo "Novo preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }
}

$produto = new Produto("Camiseta", 79.90);

$produto->aplicarDesconto(10);

?>