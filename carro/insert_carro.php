<?php

require_once '../conn.php';
$ano_carrocaio= filter_input(INPUT_POST, 'ano_carrocaio');
$valor_carrocaio = filter_input(INPUT_POST, 'valor_carrocaio');

$stmt = $conn->prepare("INSERT INTO carrocaio (anocarrocaio, valorcarrocaio) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_carrocaio);
$stmt->bindValue(':VALOR', $valor_carrocaio);
$stmt->execute();
header("Location: index_carro.php");
?>

