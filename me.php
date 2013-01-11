<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("Me");
?>

<h2>Welcome To My Corner Of The Internet!</h2>
<p>
	<img src="img/me.png" class="meimg" alt="portrait of my self"/>
</p>
<p>
	Hi, my name is Christopher McLean and I am both a web developer and a web designer living in Orlando Florida.
	The University of Central Florida has been my home for the past four years and its where I learned
	all that I know about design and development, as well as where I decided to major in 
	Digital Media with a specialization in web design. Since starting in the program, I have studied topics in 
	computer science, graphic design, classical art, game design, as well as history &amp; culture. 
</p>
<p>
	I first got into the world of technology through my high school robotics team, Raider Robotix, in New Jersey, 
	where I started working as a 3D modeler to contribute to our team's animation submissions. 
	On the team, I became familiar with the field of computer science
	and decided to take a class on the subject which taught Java. 
	These two vastly different skill sets led me to want to bridge the disciplines of art and programming together, leading me 
	to major in Digital Media, specializing in web design. At the end of my Junior year I got my first job in the 
	web industry as a web developer with the campus "Center for Distributed Learning". While here I continue to build 
	UCF course websites that are accessible to individuals with disabilities as well as develop web 
	applications for the University using JavaScript and PHP.
</p>

<?php
	echo Layout::footer();
?>