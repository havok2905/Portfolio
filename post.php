<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Blog");
?>

<div class="page shadow">

<?php
	$postid = $_GET['post'];

	$post = Database::query("SELECT * FROM blog WHERE id=$postid");
	
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