<?php 
require_once '../conn.php';

$id_carrocaio = filter_input(INPUT_GET, 'idcarrocaio');

if($id_carrocaio){
    $stmt = $conn->prepare("DELETE FROM carrocaio WHERE idcarrocaio = :ID");

    $stmt->bindValue(':ID', $id_carrocaio);

    $stmt->execute();

    header("Location: index_carro.php");
}
