<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Home");
?>

<div id="stage" class="shadow">
	<?php 
		$projects = Database::query("SELECT * FROM projects ORDER BY id DESC LIMIT 5");
	?>

	<div id="stage_header">
		<h2><a href="#"></a></h2>
	</div>
	<ul id="stage-images">
	<?php
		foreach ($projects as $key => $project) 
		{
			$banner = "/Portfolio/" . $project->banner;
			$alt = $project->alt;
			echo "<li><img src='$banner' alt='$alt' id='$key' class='full'/></li>";
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

