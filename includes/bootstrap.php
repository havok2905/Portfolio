<?php
	namespace Portfolio;
	session_start();

	require_once("database-config.php");
	require_once("database.php");
	Database::makeConnection();
	
	require_once("email.php");
	require_once("layout.php");
?>