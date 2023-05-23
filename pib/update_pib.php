<?php
include_once "../header.php";
require_once '../conn.php';

$id_pib = filter_input(INPUT_GET, 'idpibcaio');

$stmt = $conn->prepare("SELECT * FROM pibcaio WHERE idpibcaio = :ID");

$stmt->bindValue(':ID', $id_pibcaio);

$stmt->execute();

$gasolina = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_pib.php" method="POST">
  <input type="hidden" name=id_pibcaio value="<?= $gasolina['idpibcaio'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_pibcaio" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_pibcaio" id="ano_pibcaio" value="<?= $gasolina['anopibcaio'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_pibcaio" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_pibcaio" id="valor_pibcaio" value="<?= $gasolina['valorpibcaio'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>