<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Home");
?>

<div id="stage" class="shadow">
	<?php 
		$projects = Database::query("SELECT * FROM projects ORDER BY id DESC LIMIT 5");
		
		$url = "/Portfolio/work/" . $projects[0]->id;
		$title = $projects[0]->title;
		echo "<div id='stage-header'><h2><a href='$url'>$title</a></h2></div>";
	?>

	
	<ul id="stage-images">
	<?php
		foreach ($projects as $key => $project) 
		{
			$banner = "/Portfolio/" . $project->banner;
			$alt = $project->alt;
			$url = "/Portfolio/work/" . $project->id;

			echo "<li><a href='$url' id='$key' class='full'><img src='$banner' alt='$alt' class='full'/></a></li>";
		}
	?>
	</ul>
</div>

<div class="two-thirds">
<?php
	$projects = Database::query("SELECT * FROM blog ORDER BY id DESC LIMIT 1");
	$title = $projects[0]->title;
	$url   = "/Portfolio/blog/" . $projects[0]->id;
	$description = $projects[0]->description;

	echo "<h2><a href='$url'>$title</a></h2>";
	echo "<p>$description</p>";
?>
</div>
<a class="arrow" href="/Portfolio/resume/">View <br/> My Resume</a>
<div class="clear"></div>

<?= Layout::footer(); ?>

