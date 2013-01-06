<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	
	if(!isset($_GET["post"]) || $_GET["post"] == "")
	{
		header("Location: work.php");
	}
	else if(file_exists("posts/".$_GET["post"].".html"))
	{
		echo Layout::header("project");
		include("posts/".$_GET["post"].".html");
		echo Layout::footer();
	}
	else
	{
		header("Location: 404.php");
	}
?>