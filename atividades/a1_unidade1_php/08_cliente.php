<?php
declare(strict_types=1);

class Cliente {
    public string $nome;
    protected string $cpf;
    private string $telefone;
    public function __construct(string $nome,string $cpf,string $telefone){
        $this->nome=$nome; $this->cpf=$cpf; $this->telefone=$telefone;
    }
    public function interno(): string { return $this->nome.'|'.$this->cpf.'|'.$this->telefone; }
}
