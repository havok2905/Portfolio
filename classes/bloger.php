<?php
namespace Portfolio;

class Blog
{
	public static function getComments($postId)
	{
		$comments = Database::query("SELECT * FROM comments WHERE postId=$postId");
		return $comments;
	}

	public static function makeComment($message, $parentId, $postId, $commentName, $dateCreated)
	{
		Database::query("INSERT INTO comments (message, parentId, postId, commentName, dateCreated) VALUES ($message, $parentId, $postId, $commentName, $dateCreated) WHERE postId=$postId");
	}
	
	public static function toString()
	{
		return "blogger";
	}
}

?>