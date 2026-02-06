<?php
$server 	= "localhost";
$user 		= "root";
$pass 		= "";
$db 			= "alumi_app";
$port 		= "3306"; // Default port 3306
$chart 		= "utf8mb4";

try {
	$con = new PDO('mysql:server=' . $server . '; dbname=' . $db . '; charset=' . $chart . '; port=' . $port, $user, $pass);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo  "Koneksaun Error : " . $e->getMessage();
	exit();
}

function createTable($data, $kor, $id)
{
	$fahe = explode(",", $data);
	$span = count($fahe) + 2;
	echo "<table class='table table-striped table-hover'>
		<thead class='table-$kor'>
		<tr>
		<th>No.</th>";
	foreach ($fahe as $key => $col) {
		echo "<th> $col </th>";
	}
	echo "<th>Asaun </th> </tr>
		</thead>
		<tbody class='$id'>
		<tr><td class='text-center' colspan='$span'> ** Seidauk iha dadus ** </td></tr>";
}

function closeTable()
{
	echo "</tbody>
		</table>";
}
//modalll..
function createModal($size, $title)
{
	echo "
			<div class='modal fade' id='modalForm' data-bs-backdrop='static'>
				<div class='modal-dialog modal-$size'>
					<div class='modal-content'>
						
						<form id='formData' class='formData'>
						
						<div class='modal-header'>
							<h5  class='modal-title'> $title </h5>
							<button type='button' class='btn-close' data-bs-dismiss='modal'></button>
						</div>
						<div class='modal-body' id='fatinForm'>
							<center>
								<span class='spinner-border'></span>
							</center>
						</div>
						<div class='modal-footer'>
							<div class='d-flex w-100 justify-content-between'>
								
								<div class='btn-group'>
									<button type='reset' class='btn btn-secondary' data-bs-dismiss='modal'> Exit </button>
									<button type='reset' class='btn btn-danger'> Reset </button>
								</div>

								<button type='submit' class='btn btn-primary'> Submete </button>
							</div>
						</div
						
						</form>
					</div>
				</div>
			</div>";
}
//report..
function createModalReport($size, $title)
{
	echo "
			<div class='modal fade' id='modalReport' data-bs-backdrop='static'>
				<div class='modal-dialog modal-$size'>
					<div class='modal-content'>

						<div class='modal-header'>
							<h5  class='modal-title'> $title </h5>
							<button type='button' class='btn-close' data-bs-dismiss='modal'></button>
						</div>

						<div class='modal-body'>
						
						<div class='filtru row'></div>
						
						<iframe class='w-100 h-100' id='fatinReport'></iframe>
						</div>
						
						<div class='modal-footer'>
							<div class='d-flex w-100 justify-content-between'>
								
								<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'> Exit </button>

								<button type='button' class='btn btn-primary btnPrint'> Imprime </button>

							</div>
						</div
						
					</div>
				</div>
				</div>
			</div>";
}
