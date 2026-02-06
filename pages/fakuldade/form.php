<?php
include '../../config/database.php';
$sobre = $_REQUEST['sobre'];
if ($sobre == "foun") {
	$id_fak 	= "";
	$naran 	= "";
	$inc 	= "";
	$obs 	= "";
	$asaun = "foun";
} else {
	$Q = $con->prepare("SELECT * FROM t_fak 
			WHERE id_fak= :vid");
	$Q->execute(array('vid' => $sobre));
	$d = $Q->fetch(PDO::FETCH_BOTH);
	$id_fak 	= $d["id_fak"];
	$naran 	= $d["naran"];
	$inc 	= $d["inc"];
	$obs 	= $d["obs"];

	$asaun = "renova";
}
?>

<input type="hidden" name="sobre" value="<?= $asaun; ?>">
<input type="hidden" name="id" value="<?= $id; ?>">
<div class="col-md-12">

	<div class="form-group">
		<label class="form-label"> Id Fakuldade </label>
		<input type="text" name="txtId" class="form-control" required
			minlength="2" value="<?= $id_fak; ?>" maxlength="2" placeholder="Hatama ID..">
	</div>

	<div class="form-group mt-3">
		<label class="form-label"> Naran Fakuldade </label>
		<input type="text" name="txtNaran" class="form-control" required
			placeholder="Naran..." value="<?= $naran; ?>">
	</div>

	<div class="form-group mt-3">
		<label class="form-label"> Inicial Fkuldade </label>
		<input type="text" name="txtInc" class="form-control" required
			placeholder="Inicial..." value="<?= $inc; ?>">
	</div>

	<div class="form-group mt-3">
		<label class="form-label"> Observasaun </label>
		<textarea name="txtObs" class="form-control"
			placeholder="Observasaun..."><?= $obs; ?></textarea>
	</div>

</div>