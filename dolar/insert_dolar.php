<?php

require_once '../conn.php';
$ano_dolarcaio= filter_input(INPUT_POST, 'ano_dolarcaio');
$valor_dolarcaio= filter_input(INPUT_POST, 'valor_dolarcaio');

$stmt = $conn->prepare("INSERT INTO dolarcaio (anodolarcaio, valordolarcaio) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_dolarcaio);
$stmt->bindValue(':VALOR', $valor_dolarcaio);
$stmt->execute();
header("Location: index_dolar.php");
?>