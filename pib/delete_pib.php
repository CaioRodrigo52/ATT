<?php 
require_once '../conn.php';

$id_pib = filter_input(INPUT_GET, 'idpibcaio');

if($id_marcio){
    $stmt = $conn->prepare("DELETE FROM pibcaio WHERE idpibcaio = :ID");

    $stmt->bindValue(':ID', $id_pibcaio);

    $stmt->execute();

    header("Location: index_pib.php");
}