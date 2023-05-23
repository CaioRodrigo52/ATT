<?php 
require_once '../conn.php';

$id_gasolinacaio = filter_input(INPUT_GET, 'idgasolinacaio');

if($id_gasolinacaio){
    $stmt = $conn->prepare("DELETE FROM gasolinacaio WHERE idgasolinacaio = :ID");

    $stmt->bindValue(':ID', $id_gasolinacaio);

    $stmt->execute();

    header("Location: index_gasolina.php");
}