<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Me");
?>
<div class="page shadow">
	<h2>Welcome to my Corner of the Internet</h2>
	<img src="/Portfolio/img/me.png" id="me" alt="picture of Christopher McLean"/>
	<p>
		Hi, my name is Christopher McLean and I am both a web developer 
		and a web designer living in Orlando Florida. The University of 
		Central Florida has been my home for the past four years and its where 
		I learned all that I know about design and development, as well as where 
		I decided to major in Digital Media with a specialization in web design. 
		Since starting in the program, I have studied topics in computer science, 
		graphic design, art, and game design. At the end of my Junior year 
		I got my first job in the web industry as a web developer with the campus 
		"Center for Distributed Learning", where I continue to build UCF course websites 
		that are accessible to individuals with disabilities as well as develop web 
		applications for the University using JavaScript and PHP.
	</p>
	<div class="clear"></div>
</div>
<?= Layout::footer(); ?>