<?php
if (isset($_REQUEST['sobre'])) {
  include '../../config/database.php';

  if ($_REQUEST['sobre'] == 'foun') {
    $id_dep   = $_POST['txtId'];
    $naran   = $_POST['txtNaran'];
    $inc   = $_POST['txtInc'];
    $obs   = $_POST['txtObs'];

    $Q = $con->prepare("INSERT INTO t_dep SET 
			id_dep= :vid, 
			naran= :vnaran, 
			inc= :vinc, 
			obs= :vobs 
			");

    try {
      $Q->execute(array('vid' => $id_dep, 'vnaran' => $naran, 'vinc' => $inc, 'vobs' => $obs));
      echo 1;
    } catch (PDOException $e) {
      echo "Rai dadus Error " . $e->getMessage();
    }
  }

  if ($_REQUEST['sobre'] == 'renova') {
    $id_dep   = $_POST['txtId'];
    $naran   = $_POST['txtNaran'];
    $inc   = $_POST['txtInc'];
    $obs   = $_POST['txtObs'];

    $Q = $con->prepare("UPDATE t_dep SET 
			id_dep= :vid, 
			naran= :vnaran, 
			inc= :vinc, 
			obs= :vobs 
			WHERE id_dep= :idUp");

    try {
      $Q->execute(array(
        'vid' => $id_dep,
        'vnaran' => $naran,
        'vinc' => $inc,
        'vobs' => $obs,
        'idUp' => $_REQUEST['id']
      ));
      echo 1;
    } catch (PDOException $e) {
      echo "Rai dadus Error " . $e->getMessage();
    }
  }

  if ($_REQUEST['sobre'] == 'apaga') {
    try {
      $Q = $con->prepare("DELETE FROM t_dep 
				WHERE id_dep= :vid");
      $Q->execute(array('vid' => $_REQUEST['id']));
      $data = [
        'icon' => 'success',
        'text' => 'Apaga dadus susesu'
      ];
    } catch (PDOException $e) {
      $data = [
        'icon' => 'error',
        'text' => 'Error apaga dadus'
      ];
    }
    echo json_encode($data);
  }
}
