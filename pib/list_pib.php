<?php
require_once '../conn.php';

$stmt = $conn->prepare("SELECT * FROM pibcaio");
$stmt->execute();
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Ano</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <?php foreach ($list as $gasolina): ?>
    <tbody>
      <tr>
        <td><?= $gasolina['idpibcaio']; ?></td>
        <td><?= $gasolina['anopibcaio']; ?></td>
        <td><?= $gasolina['valorpibcaio']; ?></td> 
        <!-- delete e update -->
        <td>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="update_pib.php?idpibcaio=<?= $gasolina['idpibcaio']; ?>">Editar </a>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="delete_pib.php?idpibcaio=<?= $gasolina['idpibcaio']; ?>">Deletar </a>
        </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>