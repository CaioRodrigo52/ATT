<?php

require_once '../conn.php';
$id_processadorcaio = filter_input(INPUT_POST,'id_processadorcaio');
$ano_processadorcaio= filter_input(INPUT_POST, 'ano_processadorcaio');
$valor_processadorcaio = filter_input(INPUT_POST, 'valor_processadorcaio');


$stmt = $conn->prepare("UPDATE processadorcaio SET anoprocessadorcaio = :ANO, valorprocessadorcaio = :VALOR WHERE idprocessadorcaio = :ID");


$stmt->bindValue(':ID', $id_processadorcaio);
$stmt->bindValue(':ANO', $ano_processadorcaio);
$stmt->bindValue(':VALOR', $valor_processadorcaio);
$stmt->execute();

header("Location: index_processador.php");
?>