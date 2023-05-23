<?php

require_once '../conn.php';
$ano_processadorcaio= filter_input(INPUT_POST, 'ano_processadorcaio');
$valor_processadorcaio = filter_input(INPUT_POST, 'valor_processadorcaio');

$stmt = $conn->prepare("INSERT INTO processadorcaio (anoprocessadorcaio, valorprocessadorcaio) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_processadorcaio);
$stmt->bindValue(':VALOR', $valor_processadorcaio);
$stmt->execute();
header("Location: index_processador.php");
?>