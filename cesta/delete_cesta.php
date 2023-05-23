<?php 
require_once '../conn.php';

$id_cestacaio = filter_input(INPUT_GET, 'idcestacaio');

if($id_cestacaio){
    $stmt = $conn->prepare("DELETE FROM cestacaio WHERE idcestacaio = :ID");

    $stmt->bindValue(':ID', $id_cestacaio);

    $stmt->execute();

    header("Location: index_cesta.php");
}