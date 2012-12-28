<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Home");
?>
<img src="http://placekitten.com/1100/400" class="full"/>
<h2>My Services</h3>
<div class="center_container">
	<ul class="left">
		<li>
			<a href="development_lightbox" class="development_lightbox">
				<img src="img/laptop.png" alt="laptop icon"/>
				<h3 class="resume">Development</h3>
			</a>
		</li>
		<li>
			<a href="mobile_lightbox" class="mobile_lightbox">
				<img src="img/phone.png" alt="phone icon"/>
				<h3 class="resume">Mobile</h3>
			</a>
		</li>
		<li>
			<a href="design_lightbox" class="design_lightbox">
				<img src="img/design.png" alt="layout icon"/>
				<h3 class="resume">Design</h3>
			</a>
		</li>
		<li>
			<a href="interactivity_lightbox" class="interactivity_lightbox">
				<img src="img/graph.png" alt="interactive graph example icon"/>
				<h3 class="resume">Interactivity</h3>
			</a>
		</li>
	</ul>
	<div class="clear"></div>
</div>
<h2>Inside Of My Head</h2>
<?php
	$posts = Database::select("blog", array("id","title", "datecreated", "path", "category", "description"));
	$posts = array_reverse($posts);

	$title 		 = $posts[0]['title'];
	$path 		 = $posts[0]['path'];
	$description = $posts[0]['description'];

	print("
		<h3 class='resume'><a href='$path' class='underline'>NEW! $title</a></h3>
		<p>$description</p>
	");
?>


<?php
	echo Layout::footer();
?>