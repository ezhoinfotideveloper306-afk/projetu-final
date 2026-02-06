<?php
include '../../config/database.php';
$Q = $con->query("SELECT * FROM t_alumi");
$no = 0;
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
		<td>
			<div class='btn-group'>
			<button class='btn btn-primary btnEdit' id='$d->id_alumi'> 
			<i class='bi bi-pencil'></i>
			</button>
			<button class='btn btn-danger btnApaga' 
			id='$d->id_alumi' data-Naran='$d->Naran'> 
			<i class='bi bi-trash'></i>
			</button>
			</div>
		</td> 
	</tr>";
}
