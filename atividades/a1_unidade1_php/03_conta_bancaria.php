<?php
declare(strict_types=1);

class ContaBancaria {
    private float $saldo = 0.0;
    public function depositar(float $v): void { $this->saldo += $v; }
    public function sacar(float $v): void { $this->saldo -= $v; }
    public function getSaldo(): float { return $this->saldo; }
}
