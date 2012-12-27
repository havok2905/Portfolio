<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Blog");

	$posts = Database::select("blog", array("id","title", "datecreated", "path", "category", "description"));
	$posts = array_reverse($posts);

	foreach ($posts as $key => $value) 
	{
		$id = $value["id"];
		$title = $value["title"];
		$datecreated = $value["datecreated"];
		$path = $value["path"];
		$category = $value["category"];
		$description = $value["description"];

		$comments = Database::select("comments", array("id"), array("0"), "postId");
		$numcomments = 0;

		foreach ($comments as $key => $value) 
		{
			$numcomments++;
		}
		
		print("
			<div>
				<h2><a href='$path'>$title</a></h2>
				<h3 class='resume'>$category <span>".date("m-d-Y",strtotime($datecreated))."</span></h3>
				<p>$description</p>
				<span class='comment_icon'>$numcomments</span>
			</div>
		");
	}

	echo Layout::footer();
?>