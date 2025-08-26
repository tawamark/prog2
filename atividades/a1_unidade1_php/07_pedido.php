<?php
declare(strict_types=1);

class Pedido {
    private array $itens = [];
    public function inserir(string $item): void { $this->itens[] = $item; }
    public function listar(): array { return $this->itens; }
}
