<?php
class Usuario {
    private $nome;
    private $endereco;
    private $telefone;
    private $dataNascimento;
    private $login;
    private $senha;

    public function __construct($nome, $endereco, $telefone, $dataNascimento, $login, $senha) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function autenticar($login, $senha) {
        return ($this->login == $login && $this->senha == $senha);
    }


    public function cadastrar() {
        echo "Usuário {$this->nome} cadastrado com sucesso!";
    }

    public function getLogin() {
        return $this->login;
    }

    // Métodos de acesso para os dados
    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }
}
?>
