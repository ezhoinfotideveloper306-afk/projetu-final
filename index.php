<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula-4 WEB-3</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="plugins/ladda/ladda-themeless.min.css">

	<link rel="stylesheet" type="text/css" href="plugins/sweetalert2/borderless/borderless.css">

	<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="plugins/ladda/ladda.jquery.min.js"></script>

	<script type="text/javascript" src="plugins/sweetalert2/sweetalert2.js"></script>
</head>

<body>
	<nav class="navbar navbar-dark bg-danger navbar-expand-md shadow">
		<div class="container">
			<a href="#" class="navbar-brand">
				<img src="img/logo.png" class="position-absolute top-0 pt-2" width="60">
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#divNav">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="divNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="?page=home" class="nav-link"> <i class="bi bi-house"></i> Home </a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <i class="bi bi-pencil"></i> Input
						</a>
						<ul class="dropdown-menu mt-2 border-0 rounded-0 p-1 shadow">
							<li>
								<a href="?page=fakuldade" class="dropdown-item">
									<i class="bi bi-pencil"></i> Fakuldade
								</a>
							</li>
							<li>
								<a href="?page=departamentu" class="dropdown-item">
									<i class="bi bi-pencil"></i> Departamentu
								</a>
							</li>
							<a href="?page=alumni" class="dropdown-item">
								<i class="bi bi-pencil"></i> Alumi
							</a>
					</li>

					<a href="?page=anoletivu" class="dropdown-item">
						<i class="bi bi-pencil"></i> Ano-Letivo
					</a>
					</li>
					<li>
						<a href="?page=niveles" class="dropdown-item">
							<i class="bi bi-pencil"></i> Nivel-Estudu
						</a>
					</li>
				</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link"> <i class="bi bi-gear"></i> Process</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link"> <i class="bi bi-printer"></i> Output</a>
				</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container mt-5">
		<?php
		include 'content.php';
		?>
	</div>

</body>

</html>