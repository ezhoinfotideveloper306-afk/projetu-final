<?php
include '../../config/database.php';
$sobre = $_REQUEST['sobre'];
if ($sobre == "foun") {
  $id_alumi   = "";
  $Naran   = "";
  $Seksu   = "";
  $Idade  = "";
  $id_fak  = "";
  $id_dep  = "";
  $id_mp  = "";
  $email  = "";
  $imagem  = "";
  $asaun = "foun";
} else {
  $Q = $con->prepare("SELECT * FROM t_alumi 
			WHERE id_alumi= :vid");
  $Q->execute(array('vid' => $sobre));
  $d = $Q->fetch(PDO::FETCH_BOTH);
  $id_alumi   = $d["id_alumi"];
  $Naran   = $d["Naran"];
  $Seksu   = $d["Seksu"];
  $Idade   = $d["Idade"];
  $id_fak   = $d["id_fak"];
  $id_dep   = $d["id_dep"];
  $id_mp   = $d["id_mp"];
  $email   = $d["email"];
  $imagem   = $d["imagem"];

  $asaun = "renova";
}
?>

<input type="hidden" name="sobre" value="<?= $asaun; ?>">
<input type="hidden" name="id" value="<?= $id_alumi; ?>">
<div class="col-md-12">

  <div class="form-group">
    <label class="form-label"> Id Alumi </label>
    <input type="text" name="txtId" class="form-control" required
      minlength="2" value="<?= $id_alumi; ?>" maxlength="2" placeholder="Hatama ID..">
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> Naran Alumi </label>
    <input type="text" name="txtnaran" class="form-control" required
      placeholder="naran ..." value="<?= $Naran; ?>">
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> seksu </label>
    <input type="text" name="txtInc" class="form-control" required
      placeholder="Seksu..." value="<?= $Seksu; ?>">
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> idade </label>
    <textarea name="txtObs" class="form-control"
      placeholder="idade..."><?= $Idade; ?></textarea>
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> Id Fakuldade </label>
    <textarea name="txtId" class="form-control"
      placeholder="Id Fakuldade..."><?= $id_fak; ?></textarea>
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> id departamentu </label>
    <textarea name="txtId" class="form-control"
      placeholder="hatama id departamentu..."><?= $id_dep; ?></textarea>
  </div>


  <div class="form-group mt-3">
    <label class="form-label"> id munisipiu </label>
    <textarea name="txtId" class="form-control"
      placeholder="hatama id munisipiu..."><?= $id_mp; ?></textarea>
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> Email</label>
    <textarea name="txtemail" class="form-control"
      placeholder="hatam email..."><?= $email; ?></textarea>
  </div>

  <div class="form-group mt-3">
    <label class="form-label"> Imagem </label>
    <input type="file" name="textimg" class="form-control" onchange="document.getElementById
    ('imagem').src=window.URL.createObjectURL
    (this.File[0])">

  </div>

</div>