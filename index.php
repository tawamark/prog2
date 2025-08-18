<?php
// Inclua o arquivo do model Veiculo
require_once 'models/Veiculo.php';

// Crie uma instância do modelo Veiculo
$veiculo = new Veiculo('Ford', '1', 'Fusion', 2020);

// Exiba os detalhes do veículo
echo "Detalhes do Veículo" . PHP_EOL;
echo "Marca: " . $veiculo->getMarca() . PHP_EOL;
echo "Modelo: " . $veiculo->getModelo() . PHP_EOL;
echo "Ano: " . $veiculo->getAno() . PHP_EOL;
?>