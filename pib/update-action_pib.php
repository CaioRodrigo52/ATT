<?php

require_once '../conn.php';
$id_pibcaio = filter_input(INPUT_POST,'id_pibcaio');
$ano_pibcaio= filter_input(INPUT_POST, 'ano_pibcaio');
$valor_pibcaio = filter_input(INPUT_POST, 'valor_pibcaio');


$stmt = $conn->prepare("UPDATE pibcaio SET anopibcaio = :ANO, valorpibcaio = :VALOR WHERE idpibcaio = :ID");


$stmt->bindValue(':ID', $id_pibcaio);
$stmt->bindValue(':ANO', $ano_pibcaio);
$stmt->bindValue(':VALOR', $valor_pibcaio);
$stmt->execute();

header("Location: index_pib.php");
?>