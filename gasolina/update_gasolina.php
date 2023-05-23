<?php
include_once "../header.php";
require_once '../conn.php';

$id_marcio = filter_input(INPUT_GET, 'idgasolinacaio');

$stmt = $conn->prepare("SELECT * FROM gasolinacaio WHERE idgasolinacaio = :ID");

$stmt->bindValue(':ID', $id_gasolinacaio);

$stmt->execute();

$gasolina = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_gasolina.php" method="POST">
  <input type="hidden" name=id_gasolinacaio value="<?= $gasolina['idgasolinacaio'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_gasolinacaio" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_gasolinacaio" id="ano_gasolinacaio" value="<?= $gasolina['anogasolinacaio'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_gasolinacaio" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_gasolinacaio" id="valor_gasolinacaio" value="<?= $gasolina['valorgasolinacaio'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>