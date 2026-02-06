<?php
include '../../config/database.php';
$Q = $con->query("SELECT * FROM t_dep");
$no = 0;
while ($d = $Q->fetch(PDO::FETCH_LAZY)) {
	$no++;
	echo "<tr>
		<td> $no. </td>
		<td>$d->id_dep </td> 
		<td>$d->naran </td> 
		<td>$d->inc </td> 
		<td>$d->obs </td> 
		<td>
			<div class='btn-group'>
			<button class='btn btn-primary btnEdit' id='$d->id_dep'> 
			<i class='bi bi-pencil'></i>
			</button>
			<button class='btn btn-danger btnApaga' 
			id='$d->id_dep' data-naranfk='$d->naran'> 
			<i class='bi bi-trash'></i>
			</button>
			</div>
		</td> 
	</tr>";
}
