<?php
	namespace Portfolio;

	if(!isset($_GET["post"]) || $_GET["post"] == "")
	{
		//redirect to blog.php
	}
	else
	{
		require_once("includes/bootstrap.php");

		$posts = Database::select("blog", array("id","title", "datecreated", "path", "category", "description"), array($_GET["post"]), "title");
		
		echo Layout::header($posts[0]["title"]);

		include($posts[0]["path"]);

		echo Layout::footer();
	}
?>