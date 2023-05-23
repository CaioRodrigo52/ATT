<?php

require_once '../conn.php';
$id_gasolinacaio = filter_input(INPUT_POST,'id_gasolinacaio');
$ano_gasolinacaio= filter_input(INPUT_POST, 'ano_gasolinacaio');
$valor_gasolinacaio = filter_input(INPUT_POST, 'valor_gasolinacaio');


$stmt = $conn->prepare("UPDATE gasolinacaio SET anogasolinacaio = :ANO, valorgasolinacaio = :VALOR WHERE idgasolinacaio = :ID");


$stmt->bindValue(':ID', $id_gasolinacaio);
$stmt->bindValue(':ANO', $ano_gasolinacaio);
$stmt->bindValue(':VALOR', $valor_gasolinacaio);
$stmt->execute();

header("Location: index_gasolina.php");
?>