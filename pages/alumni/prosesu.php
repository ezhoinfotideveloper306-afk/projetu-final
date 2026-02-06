<?php
if (isset($_REQUEST['sobre'])) {
  include '../../config/database.php';

  if ($_REQUEST['sobre'] == 'foun') {
    $id_alumi   = $_POST['txtId'];
    $Naran   = $_POST['txtnaran'];
    $Seksu   = $_POST['txtseksu'];
    $Idade   = $_POST['txtidade'];
    $id_fak   = $_POST['txtId'];
    $id_dep   = $_POST['txtId'];
    $id_mp   = $_POST['txtId'];
    $email   = $_POST['txtemail'];
    $imagem  = $_POST['txtimg'];


    $Q = $con->prepare("INSERT INTO t_alumi SET 
      id_alumi=:vid, 
      Naran=:vnaran,
      Seksu=:vseksu,
      Idade=:vidade,   
      id_fak=:vid, 
			id_dep=:vid, 
      id_mp= :vid,
      email=:vemail,
      imagem= :vimg
			");

    try {
      $Q->execute(array(
        'vid' => $id_alumi,
        'vnaran' => $Naran,
        'vseksu' =>
        $Seksu,
        'vidade' => $Idade,
        'vid' => $id_fak,
        'vid' => $id_dep,
        'vid' => $id_mp,
        'vemail' => $email,
        'vimg' => $imamgem
      ));
      echo 1;
    } catch (PDOException $e) {
      echo "Rai dadus Error " . $e->getMessage();
    }
  }

  if ($_REQUEST['sobre'] == 'renova') {
    $id_alumi = $_POST['textId'];
    $Naran =  $_POST['textnaran'];
    $Seksu =  $_POST['textseksu'];
    $Idade =  $_POST['textidade'];
    $id_fak =  $_POST['textId'];
    $id_dep =  $_POST['textId'];
    $id_mp =  $_POST['textId'];
    $email =  $_POST['textemail'];
    $imagem   = $_POST['txtimg'];


    $Q = $con->prepare("UPDATE t_alumi SET 
			id_alumi= :vid, 
			Naran=:vnaran, 
			Seksu=:vseksu,
      Idade=:vidade,
      id_fak=:vid,
      id_dep=:vid,
      id_mp=:vid,
      email=:vemail,
      imagem=:vimg 
			WHERE id_alumi = :idUp");

    try {
      $Q->execute(array(
        'vid' => $id_alumi,
        'vnaran' => $Naran,
        'vseksu' => $Seksu,
        'vidade' => $Idade,
        'vid' => $id_fak,
        'vid' => $id_dep,
        'vid' => $id_mp,
        'vemail' => $email,
        'vimg' => $imagem,
        'idUp' => $_REQUEST['id']
      ));
      echo 1;
    } catch (PDOException $e) {
      echo "Rai dadus Error " . $e->getMessage();
    }
  }

  if ($_REQUEST['sobre'] == 'apaga') {
    try {
      $Q = $con->prepare("DELETE FROM t_alumi 
				WHERE id_alumi= :vid");
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
