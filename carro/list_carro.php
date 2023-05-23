<?php
require_once '../conn.php';

$stmt = $conn->prepare("SELECT * FROM carrocaio");
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
        <td><?= $gasolina['idcarrocaio']; ?></td>
        <td><?= $gasolina['anocarrocaio']; ?></td>
        <td><?= $gasolina['valorcarrocaio']; ?></td> 
        <!-- delete e update -->
        <td>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="update_carro.php?idcarrocaio=<?= $gasolina['idcarrocaio']; ?>">Editar </a>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="delete_carro.php?idcarrocaio=<?= $gasolina['idcarrocaio']; ?>">Deletar </a>
        </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>