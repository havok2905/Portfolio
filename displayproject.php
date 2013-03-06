<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Work");
?>

<div class="page shadow">

<?php
	$projectid = $_GET['project'];
	
	$post = Database::query("SELECT * FROM projects WHERE id=$projectid");

	if(isset($post[0]))
	{
		$path = "../Portfolio/" . $post[0]->path;
		if(file_exists($path))
		{
			include($path);	
		}
		else
		{
			header("Location:/Portfolio/404.php");
		}
	}
	else
	{
		header("Location:/Portfolio/404.php");
	}
?>

</div>

<?= Layout::footer(); ?>