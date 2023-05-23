<?php

require_once '../conn.php';
$ano_gasolinacaio= filter_input(INPUT_POST, 'ano_gasolinacaio');
$valor_gasolinacaio = filter_input(INPUT_POST, 'valor_gasolinacaio');

$stmt = $conn->prepare("INSERT INTO gasolina (anogasolinacaio, valorgasolinacaio) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_gasolinacaio);
$stmt->bindValue(':VALOR', $valor_gasolinacaio);
$stmt->execute();
header("Location: index_gasolina.php");
?>