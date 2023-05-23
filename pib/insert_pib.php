<?php

require_once '../conn.php';
$ano_pibcaio= filter_input(INPUT_POST, 'ano_pibcaio');
$valor_pibcaio = filter_input(INPUT_POST, 'valor_pibcaio');

$stmt = $conn->prepare("INSERT INTO pibcaio (anopib, valorpibcaio) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_pibcaio);
$stmt->bindValue(':VALOR', $valor_pibcaio);
$stmt->execute();
header("Location: index_pib.php");
?>