<?php
include_once "../header.php";
require_once '../conn.php';

$id_marcio = filter_input(INPUT_GET, 'idcestacaio');

$stmt = $conn->prepare("SELECT * FROM cesta WHERE idcestacaio = :ID");

$stmt->bindValue(':ID', $id_cestacaio);

$stmt->execute();

$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_cesta.php" method="POST">
  <input type="hidden" name=id_cestacaio value="<?= $item['idcestacaio'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_cestacaio" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_cestacaio" id="ano_cestacaio" value="<?= $item['anocestacaio'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_cestacaio" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_cestacaio" id="valor_cestacaio" value="<?= $item['valorcestacaio'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>