<?php
declare(strict_types=1);

class ProdutoPublico {
    public string $nome;
    public float $preco;
    public function __construct(string $nome, float $preco){ $this->nome=$nome; $this->preco=$preco; }
}
