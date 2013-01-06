<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Home");
?>
<div class="bannercontainer">
	<div class="bannertitle full"><h2><a href="#" class="underline">ROBOSIM: Try JavaScript with Robots!</a></h2></div>
	<img src="img/banner01.png" class="banner full"/>
</div>
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
			<a href="#" class="servicelink" id="developmentlink">
				<img src="img/laptop.png" class="serviceimg" alt="laptop icon"/>
				<h3 class="resume">Development</h3>
			</a>
		</li>
		<li>
			<a href="#" class="servicelink" id="mobilelink">
				<img src="img/phone.png" class="serviceimg" alt="phone icon"/>
				<h3 class="resume">Mobile</h3>
			</a>
		</li>
		<li>
			<a href="#" class="servicelink" id="designlink">
				<img src="img/design.png" class="serviceimg" alt="layout icon"/>
				<h3 class="resume">Design</h3>
			</a>
		</li>
		<li>
			<a href="#" class="servicelink" id="interactivitylink">
				<img src="img/graph.png" class="serviceimg" alt="interactive graph example icon"/>
				<h3 class="resume">Interactivity</h3>
			</a>
		</li>
	</ul>
</div>
<p id="developmentpar" class="center marginup hidden servicepar">
	Hello World Hello World Hello World Hello World Hello World
	Hello World Hello World Hello World Hello World Hello World
	Hello World Hello World Hello World Hello World Hello World
</p>
<p id="mobilepar" class="center marginup hidden servicepar">
	Hello World Hello World Hello World Hello World Hello World
	Hello World Hello World Hello World Hello World Hello World
	Hello World Hello World Hello World Hello World Hello World
</p>
<p id="designpar" class="center marginup hidden servicepar">
	Hello World Hello World Hello World Hello World Hello World
	Hello World Hello World Hello World Hello World Hello World
	Hello World Hello World Hello World Hello World Hello World
</p>
<p id="interactivitypar" class="center marginup hidden servicepar">
	Hello World Hello World Hello World Hello World Hello World
	Hello World Hello World Hello World Hello World Hello World
	Hello World Hello World Hello World Hello World Hello World
</p>
<div class="clear"></div>
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