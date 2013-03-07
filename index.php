<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Home");
?>

<div id="stage" class="shadow">
	<?php 
		$projects = Database::query("SELECT * FROM projects LIMIT 5");
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
			echo "<li><img src='$banner' alt='$alt' class='full'/></li>";
		}
	?>
	</ul>
</div>

<div class="two-thirds">
	<h2><a href="#">A Journey in Object Oriented JavaScript</a></h2>
	<p>
		When conversing about different object oriented programming languages, 
		you will mostly hear about Java or C++. Web Developers may make mention
		 of PHP, Python, or Ruby. Not many people though will mention JavaScript. 
		 It seems to become a trend to introduce this language to new web 
		 developers early in their education, before learning how to work with 
		 objects and classes. This makes sense to a certain extent, since it is a 
		 fairly easy language to pick up and it is easy to get something working 
		 very quickly in a web environment with JavaScript.
	</p>
</div>
<a class="arrow" href="/Portfolio/resume/">View <br/> My Resume</a>
<div class="clear"></div>

<?= Layout::footer(); ?>

