<?php
declare(strict_types=1);

class ConexaoBD {
    private ?object $con = null;
    private function conectar(): object { return (object)['ok'=>true,'driver'=>'simulado']; }
    public function getConexao(): object {
        if (!$this->con) $this->con = $this->conectar();
        return $this->con;
    }
}
