<?php

require_once '../conn.php';
$id_dolarcaio = filter_input(INPUT_POST,'id_dolarcaio');
$ano_dolarcaio= filter_input(INPUT_POST, 'ano_dolarcaio');
$valor_dolarcaio = filter_input(INPUT_POST, 'valor_dolarcaio');


$stmt = $conn->prepare("UPDATE dolarcaio SET anodolarcaio = :ANO, valordolarcaio = :VALOR WHERE iddolarcaio = :ID");


$stmt->bindValue(':ID', $id_dolarcaio);
$stmt->bindValue(':ANO', $ano_dolarcaio);
$stmt->bindValue(':VALOR', $valor_dolarcaio);
$stmt->execute();

header("Location: index_dolar.php");
?>