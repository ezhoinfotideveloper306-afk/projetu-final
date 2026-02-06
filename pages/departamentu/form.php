<?php
include '../../config/database.php';
$sobre = $_REQUEST['sobre'];
if ($sobre == "foun") {
  $id_dep   = "";
  $naran   = "";
  $inc   = "";
  $obs   = "";
  $asaun = "foun";
} else {
  $Q = $con->prepare("SELECT * FROM t_dep 
			WHERE id_dep= :vid");
  $Q->execute(array('vid' => $sobre));
  $d = $Q->fetch(PDO::FETCH_BOTH);
  $id_dep   = $d["id_dep"];
  $naran   = $d["naran"];
  $inc   = $d["inc"];
  $obs   = $d["obs"];

  $asaun = "renova";
}
?>

<input type="hidden" name="sobre" value="<?= $asaun; ?>">
<input type="hidden" name="id" value="<?= $id_dep; ?>">
<div class="col-md-12">

  <div class="form-group">
    <label class="form-label"> Id departamentu </label>
    <input type="text" name="txtId" class="form-control" required
      minlength="2" value="<?= $id_dep; ?>" maxlength="2" placeholder="Hatama ID..">
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> Naran departamentu </label>
    <input type="text" name="txtNaran" class="form-control" required
      placeholder="Naran ..." value="<?= $naran; ?>">
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> Inicial departamentu </label>
    <input type="text" name="txtInc" class="form-control" required
      placeholder="Inicial..." value="<?= $inc; ?>">
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> Observasaun </label>
    <textarea name="txtObs" class="form-control"
      placeholder="Observasaun..."><?= $obs; ?></textarea>
  </div>

</div>