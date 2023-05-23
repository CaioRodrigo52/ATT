<?php

require_once '../conn.php';
$id_carrocaio = filter_input(INPUT_POST,'id_carrocaio');
$ano_carrocaio= filter_input(INPUT_POST, 'ano_carrocaio');
$valor_carrocaio = filter_input(INPUT_POST, 'valor_carrocaio');


$stmt = $conn->prepare("UPDATE carrocaio SET anocarrocaio = :ANO, valorcarrocaio = :VALOR WHERE idcarrocaio = :ID");


$stmt->bindValue(':ID', $id_carrocaio);
$stmt->bindValue(':ANO', $ano_carrocaio);
$stmt->bindValue(':VALOR', $valor_carrocaio);
$stmt->execute();

header("Location: index_carro.php");
?>