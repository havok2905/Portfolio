<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Work");
?>
<h2>My Collection of Work</h2>
<div class="center_container">
	<ul class="left">
		<li>
			<a href="#" class="shadow">
				<img src="img/robosimthumb.png" alt="robosim project icon"/>
				<h3 class="resume">RoboSim</h3>
			</a>
		</li>
		<li>
			<a href="#" class="shadow">
				<img src="img/personalbrandthumb.png" alt="personal brand project icon"/>
				<h3 class="resume">Personal Brand</h3>
			</a>
		</li>
		<li>
			<a href="#" class="shadow">
				<img src="img/robosimthumb.png" alt="lightbox plugin project icon"/>
				<h3 class="resume">JQuery Lightbox</h3>
			</a>
		</li>
		<li>
			<a href="#" class="shadow">
				<img src="img/robosimthumb.png" alt="pdo wrapper project icon"/>
				<h3 class="resume">PDO Wrapper</h3>
			</a>
		</li>
	</ul>
	<div class="clear"></div>
</div>

<?php
	echo Layout::footer();
?>