<?php
include '../../config/database.php';
$Q = $con->query("SELECT * FROM t_fak");
$no = 0;
while ($d = $Q->fetch(PDO::FETCH_LAZY)) {
	$no++;
	echo "<tr>
		<td> $no. </td>
		<td>$d->id_fak </td> 
		<td>$d->naran </td> 
		<td>$d->inc </td> 
		<td>$d->obs </td> 
		<td>
			<div class='btn-group'>
			<button class='btn btn-primary btnEdit' id='$d->id_fak'> 
			<i class='bi bi-pencil'></i>
			</button>
			<button class='btn btn-danger btnApaga' 
			id='$d->id_fak' data-naranfk='$d->nrn'> 
			<i class='bi bi-trash'></i>
			</button>
			</div>
		</td> 
	</tr>";
}
