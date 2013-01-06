<?php
	namespace Portfolio;
	include("bootstrap.php");

	date_default_timezone_set("America/New_York");
	$datetime = date("Y/m/d H:i:s", time());
	$datetimepretty = date("m/d/Y h:i a");

	if(!isset($_POST["comment"]) || !isset($_POST["comment_name"]))
	{
		$_POST["comment"] = "no comment";
		$_POST["comment_name"] = "no comment name";
	}
	else if($_POST["comment"] != "no comment" && $_POST["comment_name"] != "no comment name")
	{
		Database::insert("comments", array("text", "parentId", "postId", "commentname", "datecreated"), array($_POST["comment"], 0, $_SESSION["postid"], $_POST["comment_name"], $datetime));
		$_POST["submitcomment"] = "no comment";
	}

	$array = array("datetime"=>$datetimepretty);
	echo json_encode($array);
?>