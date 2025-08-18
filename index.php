<?php
require_once 'models/Veiculo.php';

$veiculo = new Veiculo('Ford', '1', 'Fusion', 2020);

echo "Detalhes do Veículo" . PHP_EOL;
echo "Marca: " . $veiculo->getMarca() . PHP_EOL;
echo "Modelo: " . $veiculo->getModelo() . PHP_EOL;
echo "Ano: " . $veiculo->getAno() . PHP_EOL;
?>