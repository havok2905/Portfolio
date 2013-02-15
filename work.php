<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Work");
?>
<h2>My Collection of Work</h2>
<div class="center_container">
	<ul class="left work">
		<li>
			<a href="project.php?post=robosim">
				<img src="img/robosimthumb.png" alt="robosim project icon"  class="shadow"/>
				<h3>RoboSim</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=toysite">
				<img src="img/toysthumb.png" alt="mclean toys project logo"  class="shadow"/>
				<h3>Retro Toy Site</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=juular">
				<img src="img/juularthumb.png" alt="lightbox plugin project icon"  class="shadow"/>
				<h3>JQuery Lightbox</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=pdoclass">
				<img src="img/regulatorthumb.png" alt="pdo wrapper project icon"  class="shadow"/>
				<h3>PDO Class</h3>
			</a>
		</li>
	</ul>
	<ul class="left work">
		<li>
			<a href="project.php?post=personalsite">
				<img src="img/personalsitethumb.png" alt="personal site project icon"  class="shadow"/>
				<h3>Personal Site</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=stockexchange">
				<img src="img/exchangethumb.png" alt="front-end exchange project icon"  class="shadow"/>
				<h3>Stock Exchange</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=personalbrand">
				<img src="img/personalbrandthumb.png" alt="personal brand project icon"  class="shadow"/>
				<h3>Personal Brand</h3>
			</a>
		</li>
		<li>
			<a href="project.php?post=stone">
				<img src="img/stonethumb.png" alt="stone email blast project icon"  class="shadow"/>
				<h3>Stone Email Blast</h3>
			</a>
		</li>
	</ul>
	<div class="clear"></div>
</div>

<?php
	echo Layout::footer();
?>