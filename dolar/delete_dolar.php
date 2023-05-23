<?php 
require_once '../conn.php';

$id_dolarcaio = filter_input(INPUT_GET, 'iddolarcaio');

if($id_dolarcaio){
    $stmt = $conn->prepare("DELETE FROM dolarcaio WHERE iddolarcaio = :ID");

    $stmt->bindValue(':ID', $id_dolarcaio);

    $stmt->execute();

    header("Location: index_dolar.php");
}