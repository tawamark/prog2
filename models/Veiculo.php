<?php 

class veiculo {

    private $marca;
    private $id;
    private $modelo;
    private $ano;

    public function __construct($marca, $id, $modelo, $ano) {
        $this->marca = $marca;
        $this->id = $id;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getId() {
        return $this->id;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }
}

?>