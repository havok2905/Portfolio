<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Work");
?>

<h2>My Collection of Work</h2>

<?php
	$projects = Database::query("SELECT * FROM projects ORDER BY id DESC");

	foreach($projects as $key => $project) 
	{
		$thumb = "/Portfolio/" . $project->thumb;
		$alt = $project->alt;
		$url = "/Portfolio/work/" . $project->id;

		if($key == 0)
		{
			echo "<ul class='work start unmarked'>";
		}
		else if($key % 4 == 0)
		{
			echo "<ul class='work unmarked'>";
		}

		if($key % 4 == 1)
		{
			echo "<li><a href='$url'><img src='$thumb' alt='$alt' class='shadow middle-left'/></a></li>";
		}
		else if($key % 4 == 2)
		{
			echo "<li><a href='$url'><img src='$thumb' alt='$alt' class='shadow middle-right'/></a></li>";
		}
		else
		{
			echo "<li><a href='$url'><img src='$thumb' alt='$alt' class='shadow'/></a></li>";
		}

		if($key % 4 == 3)
		{
			echo "</ul>";
		}
	}
?>

<?= Layout::footer(); ?>