<?php
	namespace Portfolio;
	session_start();
	
	require_once("db_config.php");
	require_once("database.php");

	Database::makeConnection();

	require_once("layout.php");
	require_once("bloger.php");
	require_once("email.php");
?>