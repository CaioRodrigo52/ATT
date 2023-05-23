<?php

require_once '../conn.php';
$ano_cestacaio= filter_input(INPUT_POST, 'ano_cestacaio');
$valor_cestacaio = filter_input(INPUT_POST, 'valor_cestacaio');

$stmt = $conn->prepare("INSERT INTO cestacaio (anocestacaio, valorcestacaio) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_cestacaio);
$stmt->bindValue(':VALOR', $valor_cestacaio);
$stmt->execute();
header("Location: index_cesta.php");
?>