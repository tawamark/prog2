<?php
declare(strict_types=1);

class ContaBancariaSegura {
    private float $saldo = 0.0;
    public function depositar(float $v): void { $this->saldo += $v; }
    public function sacar(float $v): bool {
        if ($v <= $this->saldo) { $this->saldo -= $v; return true; }
        return false;
    }
    public function getSaldo(): float { return $this->saldo; }
}
