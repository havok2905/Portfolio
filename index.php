<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Home");
?>

<div class="bannercontainer">
	<div class="half">
		<p class="tagline">
			Hi, I'm <span>Christopher McLean.</span> I am a web developer and designer, located in Orlando Florida, and I like to program and design content for the web.
		</p>
		<a href="#contact" class="contactmebutton">contact me</a>
	</div>
	<video controls class="half">
	  <source src="intro.mp4" type="video/mp4">
	  <source src="intro.ogg" type="video/ogg">
		Your browser does not support the video tag.
	</video>
</div>
<div class="clear"></div>
<h2>My Services</h3>
<div class="center_container">
	<ul class="left">
		<li>
			<a href="#" class="servicelink" id="developmentlink">
				<img src="img/laptop.png" class="serviceimg" alt="laptop icon"/>
				<h3>Development</h3>
			</a>
		</li>
		<li>
			<a href="#" class="servicelink" id="mobilelink">
				<img src="img/phone.png" class="serviceimg" alt="phone icon"/>
				<h3>Mobile</h3>
			</a>
		</li>
		<li>
			<a href="#" class="servicelink" id="designlink">
				<img src="img/design.png" class="serviceimg" alt="layout icon"/>
				<h3>Design</h3>
			</a>
		</li>
		<li>
			<a href="#" class="servicelink" id="interactivitylink">
				<img src="img/graph.png" class="serviceimg" alt="interactive graph example icon"/>
				<h3>Interactivity</h3>
			</a>
		</li>
	</ul>
</div>
<p id="developmentpar" class="center marginup hidden servicepar">
	<strong>As a Web Developer</strong> I program the code that
	makes your website or web application work. Using programming
	languages such as HTML, CSS, JavaScript, and PHP I make 
	software function as intended cleanly and securely.
</p>
<p id="mobilepar" class="center marginup hidden servicepar">
	<strong>As a Mobile Developer</strong> I program the code that
	makes your mobile or tablet application run as expected. I work 
	with responsive design techniques using CSS to adjust the layouts 
	of mobile web applications.
</p>
<p id="designpar" class="center marginup hidden servicepar">
	<strong>As a Designer</strong> I use color theory, typography, 
	and other design principles to make your applications both user
	friendly as well as aesthetically pleasing. This involves work
	with Photoshop, Illustrator, HTML, and CSS. I can design interfaces, 
	logos, print media.
</p>
<p id="interactivitypar" class="center marginup hidden servicepar">
	<strong>As an Interactive Designer</strong> I use human psychology,
	iterative design, game design, and more to improve on the usability
	and meaningful effects of using interactive systems. I aim to ensure
	that a system not only functions cleanly, but also accomplishes its
	main goal.
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