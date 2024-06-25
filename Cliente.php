<?php
class Cliente {
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $endereco;

    public function __construct($nome, $email, $telefone, $endereco) {
        $this->nome         = $nome;
        $this->sobrenome    = $sobrenome;
        $this->email        = $email;
        $this->telefone     = $telefone;
        $this->endereco     = $endereco;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getSobrenome() {
        return $this->sobrenome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function getEndereco() {
        return $this->endereco;
    }
}
?>