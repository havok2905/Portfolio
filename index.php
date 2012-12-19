<?php
	namespace Portfolio;

	require_once("includes/layout.php");
	echo Layout::header("Home");
?>

<div>
	<img src="">
</div>
<div>
	<h3>What I Can Do</h3>
	<div class="left">
		<a href="">
			<img src="img/laptop.png"/>
			<h4>DEVELOPMENT</h4>
		</a>
		<ul class="seriftext">
			<li>HTML, JavaScript, CSS3</li>
			<li>PHP &amp; Fuel PHP Framework</li>
			<li>Database Architecture</li>
		</ul>
	</div>
	<div class="left">
		<a href="">
			<img src="img/phone.png"/>
			<h4>MOBILE</h4>
		</a>
		<ul class="seriftext">
			<li>Android Development</li>
			<li>Mobile Web Development</li>
			<li>Responsive Design</li>
		</ul>
	</div>
	<div class="left">	
		<a href="">
			<img src="img/design.png"/>
			<h4>DESIGN</h4>
		</a>
		<ul class="seriftext">
			<li>Web &amp; Mobile Layouts</li>
			<li>Logo Design &amp; Web Graphics</li>
			<li>3D Modeling &amp; Rendering</li>
		</ul>
	</div>
	<div class="left">	
		<a href="">
			<img src="img/graph.png"/>
			<h4>ITERACTIVITY</h4>
		</a>
		<ul class="seriftext">
			<li>Gamification</li>
			<li>Social Media Integration</li>
			<li>UI Design</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<div>
	<h3>Inside Of My Head</h3>
</div>
<div>
</div>

<?php
	echo Layout::footer();
?>