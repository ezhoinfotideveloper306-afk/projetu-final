<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Report Departaementu</title>
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="../../plugins/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="../../bootstrap/js/bootstrap.bundle.js"></script>
</head>

<body>
  <div class="container-fluid">
    <h1 class="display-4 text-center">Report departamentu </h1>
    <hr>

    <?php
    include '../../config/database.php';
    $no = 0;
    if (isset($_REQUEST['vid'])) {
      if ($_REQUEST['vid'] == 'hotu') {
        $Q = $con->query("SELECT * FROM t_dep");
      } else {
        $Q = $con->query("SELECT * FROM t_dep WHERE id_dep ='$_REQUEST[vid]'");
      }
    } else {
      $Q = $con->query("SELECT * FROM t_dep");
    }

    echo "<table class='table table-bordered table-striped'>
	<thead class=' table-primary'>
	<tr>
		<th>No.</th> <th>Id</th> <th>id fakuldade </th> <th>Inicial </th>
		 <th>Observasaun </th>
	</tr>
	</thead>
	<tbody>";
    while ($d = $Q->fetch(PDO::FETCH_LAZY)) {
      $no++;
      echo "<tr>
		<td> $no. </td>
		<td>$d->id_dep </td> 
		<td>$d->naran </td> 
		<td>$d->inc </td> 
		<td>$d->obs </td> 
	</tr>";
    }
    echo "</tbody></table>";
    ?>
    <button class="print d-none"> Print </button>
  </div>
</body>
<script type="text/javascript">
  $(function() {
    $(".print").on("click", function() {
      window.print();
    });
  });
</script>

</html>