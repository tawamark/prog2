<?php
declare(strict_types=1);

class Usuario {
    private string $senha;
    public function __construct(string $senha){ $this->senha = $senha; }
    public function verificarSenha(string $senha): bool { return $this->senha === $senha; }
}
