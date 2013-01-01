<?php
	namespace Portfolio;

	if(!isset($_GET["post"]) || $_GET["post"] == "")
	{
		header("Location: blog.php");
	}
	else
	{
		require_once("includes/bootstrap.php");

		if(!isset($_GET["submitcomment"]))
		{
			$_GET["submitcomment"] = "no comment or javascript enabled";
		}
		else if($_GET["submitcomment"] == "comment")
		{
			Database::insert("comments", array("text", "parentId", "postId", "commentname"), array($_GET["comment"], 0, 1, $_GET["comment_name"]));
			$_GET["submitcomment"] = "no comment";
		}

		$posts = Database::select("blog", array("id","title", "datecreated", "path", "category", "description"), array($_GET["post"]), "title");
		$title = $posts[0]['title'];
		$comments = Database::select("comments", array("id","text", "parentId", "postId", "commentname"), array(1), "postId");
		$comments = array_reverse($comments);

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

			echo("<p><strong><span>$name says: </span></strong>$text</p>");
		}

		echo("</div>");
		echo Layout::footer();
	}
?>