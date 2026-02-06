<?php
if (isset($_REQUEST['page'])) {

	$page = $_REQUEST['page'];

	if ($page == "home") {
		echo " <h1>Bemvindo mai hau nia webiste </h1>";
	}

	if ($page == "fakuldade") {
		echo " <h1>Pagina Fakuldade </h1>";
		include 'pages/fakuldade/view.php';
	}

	if ($page == "departamentu") {
		echo " <h1>Pagina Departamentu </h1>";
		include 'pages/departamentu/view.php';
	}


	if ($page == "alumni") {
		echo " <h1>Pagina alumi </h1>";
		include 'pages/alumni/view.php';
	}

	if ($page == "anoletivu") {
		echo " <h1>Pagina Ano-Letivo </h1>";
	}

	if ($page == "niveles") {
		echo " <h1>Pagina Nivel Estudu </h1>";
	}
} else {
	echo " <h1>Bemvindo mai hau nia webiste </h1>";
}
