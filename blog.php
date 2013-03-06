<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Blog");
?>

<?php
	$posts = Database::query("SELECT * FROM blog ORDER BY id DESC");

	foreach ($posts as $key => $post) 
	{
		$title = $post->title;
		$description = $post->description;
		$url = "/Portfolio/blog/" . $post->id;
		$date = date("m-d-Y",strtotime($post->datecreated));

		echo "<h2><a href='$url'>$title $date</a></h2>";
		echo "<p>$description</p>";
	}
?>

<?= Layout::footer(); ?>