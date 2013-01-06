<?php
	namespace Portfolio;
	require_once("includes/bootstrap.php");

	date_default_timezone_set("America/New_York");
	$datetime = date("Y/m/d H:i:s", time());

	$posts = Database::select("blog", array("id","title", "datecreated", "path", "category", "description"), array($_GET["post"]), "title");

	if(!isset($_GET["post"]) || $_GET["post"] == "")
	{
		header("Location: blog.php");
	}
	else if(count($posts) != 0)
	{
		$title = $posts[0]['title'];
		$id = $posts[0]["id"];
		$comments = Database::select("comments", array("id","text", "parentId", "postId", "commentname", "datecreated"), array($id), "postId");
		$comments = array_reverse($comments);

		$_SESSION["postid"] = $id;

		if(!isset($_GET["submitcomment"]))
		{
			$_GET["submitcomment"] = "no comment submitted or javascript enabled";
		}
		else if($_GET["submitcomment"] == "comment")
		{
			Database::insert("comments", array("text", "parentId", "postId", "commentname", "datecreated"), array($_GET["comment"], 0, $id, $_GET["comment_name"], $datetime));
			$_GET["submitcomment"] = "comment submitted without javascript";
		}
		else
		{
			$_GET["submitcomment"] = "no comment submitted. Error.";
		}

		echo Layout::header($posts[0]["title"]);

		include($posts[0]["path"]);

		echo("
			<h2>Comments</h2>
			<h3 class='resume'>Make a New Comment</h3>
			<form method='GET' action='post.php?post=$title'>
				<textarea id='comment' name='comment' class='styledform'></textarea>
				<input type='hidden' name='post' value='$title' class='styledform'/>
				<div class='input_container'>
					<!--[if IE]><input type='text' name='comment_name' id='comment_name' class='styledform' value='name'/><![endif]-->
					<![if !IE]><input type='text' name='comment_name' id='comment_name' class='styledform' placeholder='name'/><![endif]>
					<input type='submit' name='submitcomment' id='submitcomment' value='comment' class='submit'/>
				</div>
			</form>
			<div class='clear'></div>
		");

		echo("<div id='comment_container'>");

		foreach ($comments as $key => $value) 
		{
			$text = $value["text"];
			$name = $value["commentname"];
			$date = date("m/d/Y h:i a", strtotime($value["datecreated"]));

			echo("
				<div class='comment_subcontainer'>
					<p><strong>$name </strong> $date</p>
					<p>$text</p>
				</div>
			");
		}

		echo("</div>");
		echo Layout::footer();
	}
	else
	{
		header("Location: 404.php");
	}
?>