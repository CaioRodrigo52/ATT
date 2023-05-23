<?php

require_once '../conn.php';
$id_cestacaio = filter_input(INPUT_POST,'id_cestacaio');
$ano_cestacaio= filter_input(INPUT_POST, 'ano_cestacaio');
$valor_cestacaio = filter_input(INPUT_POST, 'valor_cestacaio');


$stmt = $conn->prepare("UPDATE cestacaio SET anocestacaio = :ANO, valorcestacaio = :VALOR WHERE idcestacaio = :ID");


$stmt->bindValue(':ID', $id_cestacaio);
$stmt->bindValue(':ANO', $ano_cestacaio);
$stmt->bindValue(':VALOR', $valor_cestacaio);
$stmt->execute();

header("Location: index_cesta.php");
?>