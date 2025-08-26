<?php
declare(strict_types=1);

class ProdutoEncapsulado {
    public string $nome;
    private float $preco;
    public function __construct(string $nome, float $preco){ $this->nome=$nome; $this->preco=$preco; }
    public function getPreco(): float { return $this->preco; }
    public function setPreco(float $v): void { $this->preco = $v; }
}
