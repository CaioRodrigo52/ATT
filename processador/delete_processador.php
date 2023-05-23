<?php 
require_once '../conn.php';

$id_processadorcaio = filter_input(INPUT_GET, 'idprocessadorcaio');

if($id_processadorcaio){
    $stmt = $conn->prepare("DELETE FROM processadorcaio WHERE idprocessadorcaio = :ID");

    $stmt->bindValue(':ID', $id_processadorcaio);

    $stmt->execute();

    header("Location: index_processador.php");
}