
<?php

class Usuario {
    protected $nome;
    private $senha;

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->setSenha($senha);
    }

    public function setSenha($senha) {
        if (strlen($senha) >= 8) {
            $this->senha = password_hash($senha, PASSWORD_DEFAULT);
            echo "Senha cadastrada com sucesso!\n";
        } else {
            echo "Erro: a senha deve ter pelo menos 8 caracteres!\n";
        }
    }

    public function verificarSenha($senha) {
        return password_verify($senha, $this->senha);
    }

    public function listarPermissoes() {
        return ["Acessar sistema"];
    }
}

class Admin extends Usuario {
    public function listarPermissoes() {
        return [
            "Acessar sistema",
            "Cadastrar usuários",
            "Editar usuários",
            "Excluir usuários",
            "Gerenciar sistema"
        ];
    }
}

class Cliente extends Usuario {
    public function listarPermissoes() {
        return [
            "Acessar sistema",
            "Visualizar produtos",
            "Realizar compras"
        ];
    }
}

$admin = new Admin("Lucas", "admin12345");
$cliente = new Cliente("João", "cliente123");

echo "\n=== ADMINISTRADOR ===\n";
echo "Permissões:\n";

foreach ($admin->listarPermissoes() as $permissao) {
    echo "- " . $permissao . "\n";
}

echo "\n=== CLIENTE ===\n";
echo "Permissões:\n";

foreach ($cliente->listarPermissoes() as $permissao) {
    echo "- " . $permissao . "\n";
}

echo "\nVerificação da senha do administrador: ";

echo $admin->verificarSenha("admin12345") ? "Senha correta!\n" : "Senha incorreta!\n";

?>ççeçççççeçee