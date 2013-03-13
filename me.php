<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("Me");
?>
	<div class="clear"></div>
	<img src="/Portfolio/img/me.png" id="me" alt="picture of Christopher McLean"/>
	<div>
		<h2>Welcome to my Corner of the Internet</h2>
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
	</div>
	<div class="clear"></div>
	<h2>What I Can Do For You!</h2>
	<div class="full">
		<ul class="accordian">
			<li>
				Client Side Development
				<span>&gt;&gt;</span>
				<div>
					<ul>
						<li>JavaScript, CSS, HTML5</li>
						<li>Search Engine Optimization</li>
						<li>Web Accessibility</li>
					</ul>
					<p>
						As a client/front end developer, I build your web site or application to be aestheically pleasing, 
						marketable, interactive, and accessible to your users. I craft my work in ways that are intuitive, 
						secure, and fit the needs of my users. 
					</p>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				Server Side Development
				<span>&gt;&gt;</span>
				<div>
					<ul>
						<li>PHP, Ruby on Rails, Python</li>
						<li>Database Architecture</li>
						<li>Fuel PHP</li>
					</ul>
					<p>
						As a server/back end developer, I ensure that your website or application is secure and your 
						records are well kept, intuitive, and organized. I craft modular and robust database
						schema to fit your service's needs.
					</p>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				Mobile Development
				<span>&gt;&gt;</span>
				<div>
					<ul>
						<li>Responsive Websites</li>
						<li>Mobile Websites</li>
						<li>Android Apps with Java</li>
					</ul>
					<p>
						As a mobile developer, I make use of a variety of different techniques to bring your service 
						to mobile devices. I design layouts with multiple platforms in mind, and can build mobile 
						websites, responsive solutions, as well as native applications.
					</p>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				Graphic Design
				<span>&gt;&gt;</span>
				<div>
					<ul>
						<li>Web Layouts</li>
						<li>Logos and Branding</li>
						<li>3D Modeling and Texturing</li>
					</ul>
					<p>
						As a graphic designer, I make use of design theory to build intuitive website designs, 
						logos and brands to further your service, and make digital art to enrich your website. I 
						can design both 2D graphics as well as 3D graphics.
					</p>
				</div>
				<div class="clear"></div>
			</li>
		</ul>
	</div>
	<div class="half accordian-result"></div>
	<div class="clear"></div>
<?= Layout::footer(); ?>