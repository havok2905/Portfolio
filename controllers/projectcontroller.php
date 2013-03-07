<?php
	namespace Portfolio;
	header('Content-type: application/json');
	include("../classes/bootstrap.php");

	$projects = Database::query("SELECT * FROM projects ORDER BY id DESC LIMIT 5");

	echo json_encode($projects);
?>