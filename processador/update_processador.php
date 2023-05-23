<?php
include_once "../header.php";
require_once '../conn.php';

$id_procassadorcaio = filter_input(INPUT_GET, 'idprocessadorcaio');

$stmt = $conn->prepare("SELECT * FROM processadorcaio WHERE idprocessadorcaio = :ID");

$stmt->bindValue(':ID', $id_processadorcaio);

$stmt->execute();

$gasolina = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_processador.php" method="POST">
  <input type="hidden" name=id_processadorcaio value="<?= $gasolina['idprocessadorcaio'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_processadorcaio" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_processadorcaio" id="ano_processadorcaio" value="<?= $gasolina['anoprocessadorcaio'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_processadorcaio" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_processadorcaio" id="valor_processadorcaio" value="<?= $gasolina['valorprocessadorcaio'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>