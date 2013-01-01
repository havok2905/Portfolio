<?php
	namespace Portfolio;

	if(!isset($_POST["comment"]) || !isset($_POST["comment_name"]))
	{
		$_POST["comment"] = "no comment";
		$_POST["comment_name"] = "no comment name";
	}
	else if($_POST["comment"] != "no comment" && $_POST["comment_name"] != "no comment name")
	{
		
		Database::insert("comments", array("text", "parentId", "postId", "commentname"), array($_POST["comment"], 0, 1, $_POST["comment_name"]));
		$_POST["submitcomment"] = "no comment";
	}

	echo("hello3");
	die();
?>