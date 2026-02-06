<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Report dadus Alumi</title>
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="../../plugins/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="../../bootstrap/js/bootstrap.bundle.js"></script>
</head>

<body>
  <div class="container-fluid">
    <h1 class="display-4 text-center">Report Dadus Alumi </h1>
    <hr>

    <?php
    include '../../config/database.php';
    $no = 0;
    if (isset($_REQUEST['vid'])) {
      if ($_REQUEST['vid'] == 'hotu') {
        $Q = $con->query("SELECT * FROM t_alumi");
      } else {
        $Q = $con->query("SELECT * FROM t_alumi WHERE id_alumi ='$_REQUEST[vid]'");
      }
    } else {
      $Q = $con->query("SELECT * FROM t_alumi");
    }

    echo "<table class='table table-bordered table-striped'>
	<thead class=' table-primary'>
	<tr>
		<th>No.</th> <th>Id alumi</th> <th>Naran</th> <th>Seksu </th> <th>Idade</th>
    <th>id fakuldade</th><th>id departamentu </th> <th>id munisipiu</th> 
		 <th>email </th> <th>imagem </th>
	</tr>
	</thead>
	<tbody>";
    while ($d = $Q->fetch(PDO::FETCH_LAZY)) {
      $no++;
      echo "<tr>
		<td> $no. </td>
		<td>$d->id_alumi </td> 
		<td>$d->Naran </td> 
		<td>$d->Seksu </td> 
		<td>$d->Idade </td> 
		<td>$d->id_fak </td> 
		<td>$d->id_dep </td> 
		<td>$d->id_mp </td> 
		<td>$d->email </td> 
		<td>$d->imagem </td> 
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