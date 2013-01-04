<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Home");
?>
<img src="img/banner.png" class="full"/>
<p class="hidden">Hi, My name is Christopher McLean!</p>
<p class="hidden">"I like to build websites and interactive media and live in sunny Orlando Florida"</p>
<ul class="hidden">
	<li>254-424-4921</li>
	<li>mclean.webdev@gmail.com</li>
</ul>
<h2>My Services</h3>
<div class="center_container">
	<ul class="left">
		<li>
			<a href="development_lightbox" class="development_lightbox transshadow">
				<img src="img/laptop.png" alt="laptop icon"/>
				<h3 class="resume">Development</h3>
			</a>
		</li>
		<li>
			<a href="mobile_lightbox" class="mobile_lightbox transshadow">
				<img src="img/phone.png" alt="phone icon"/>
				<h3 class="resume">Mobile</h3>
			</a>
		</li>
		<li>
			<a href="design_lightbox" class="design_lightbox transshadow">
				<img src="img/design.png" alt="layout icon"/>
				<h3 class="resume">Design</h3>
			</a>
		</li>
		<li>
			<a href="interactivity_lightbox" class="interactivity_lightbox transshadow">
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
		<h3 class='resume'><a href='post.php?post=$title' class='underline'>NEW! $title</a></h3>
		<p>$description</p>
	");
?>


<?php
	echo Layout::footer();
?>