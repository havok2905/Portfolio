<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Work");
?>
<h2>My Collection of Work</h2>
<div class="center_container">
	<ul class="left work">
		<li>
			<a href="project.php?post=welcome">
				<img src="img/robosimthumb.png" alt="robosim project icon"  class="shadow"/>
				<h3 class="resume">RoboSim</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=welcome">
				<img src="img/personalbrandthumb.png" alt="personal brand project icon"  class="shadow"/>
				<h3 class="resume">Personal Brand</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=welcome">
				<img src="img/robosimthumb.png" alt="lightbox plugin project icon"  class="shadow"/>
				<h3 class="resume">JQuery Lightbox</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=welcome">
				<img src="img/robosimthumb.png" alt="pdo wrapper project icon"  class="shadow"/>
				<h3 class="resume">PDO Wrapper</h3>
			</a>
		</li>
	</ul>
	<ul class="left work">
		<li>
			<a href="project.php?post=welcome">
				<img src="img/robosimthumb.png" alt="personal site project icon"  class="shadow"/>
				<h3 class="resume">Personal Site</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=welcome">
				<img src="img/robosimthumb.png" alt="personal site project icon"  class="shadow"/>
				<h3 class="resume">Personal Site</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=welcome">
				<img src="img/robosimthumb.png" alt="personal site project icon"  class="shadow"/>
				<h3 class="resume">Personal Site</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=welcome">
				<img src="img/robosimthumb.png" alt="personal site project icon"  class="shadow"/>
				<h3 class="resume">Personal Site</h3>
			</a>
		</li>
	</ul>
	<div class="clear"></div>
</div>

<?php
	echo Layout::footer();
?>