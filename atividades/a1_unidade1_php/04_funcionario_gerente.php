<?php
declare(strict_types=1);

class Funcionario {
    protected float $salario = 0.0;
    public function __construct(float $salario=0.0){ $this->salario=$salario; }
}
class Gerente extends Funcionario {
    public function setSalario(float $v): void { $this->salario=$v; }
    public function getSalario(): float { return $this->salario; }
}
