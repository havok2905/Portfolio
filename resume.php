<?php
	namespace Portfolio;

	require_once("includes/layout.php");
	echo Layout::header("Resume");
?>

<div>
	<ul class="inlinelist">
		<li><a href="">PDF</a> | </li>
		<li><a href="">DOC</a> | </li>
		<li><a href="">DOCX</a></li>
	</ul>
	<h2>Christopher W. McLean</h2>
	<ul class="markedlist">
		<li>Address: 1829 Loftway Circle Apartment 1422, Orlando Florida, 32826</li>
		<li>Phone: 254-424-4921</li>
		<li>Email: mclean.webdev@gmail.com</li>
		<li>References available on request</li>
	</ul>
	<h2>Ojective</h2>
	<p>
		Seeking a position as a web developer utilizing client-side and server-side technlogy to create new content for the web.
	</p>
	<h2>Education</h2>
	<ul class="markedlist">
		<li>University of Central Florida, Orlando Florida</li>
		<li>Expected Graduation: May 2013</li>
		<li>Bachelor of Arts in Digital Media</li>
		<li>Ceoncentration: Web Design</li>
		<li>Cumulative GPA: 3.274</li>
		<li>Major GPA: 3.504</li>
		<li>Deans List Fall 2011 - Present</li>
	</ul>
	<h2>Coursework</h2>
	<h3 class="resume">Web Design Workshop</h3>
	<ul class="markedlist">
		<li>Title: Front-End Exchange</li>
		<li>Role: PHP Developer/Project Manager</li>
		<li>Technologies: HTML, CSS, JavaScript, PHP, Dr. Moshell's API</li>
	</ul>
	<p>
		<strong>Responsibilites:</strong> As a team, develop and test a responsive mobile banking application using a provided 
		API hosted on the professor's server. This application will be used by other courses at UCF
		for exchanging fake credit and fake company stock. 
	</p>
	<h2>Employment</h2>
	<h3 class="resume">University of Central Florida (May 2012 - Present)<br/> Center For Distributed Learning, Orlando Florida</h3>
	<h4>Techranger</h4>
	<p>
		<strong>Responsibilities:</strong> Developed and managed accessible course websites for a University with over 50,000 students 
		using semantic markup and CSS. Worked on internal web applications to benefit the department using server-side 
		and client-side languages such as PHP, Python, and  JavaScript.  Responsible for presentations on web accessibility 
		as they pertain to online education.
	</p>
	<h4>Projects</h4>
	<p>
		<strong>Blended Open Badges:</strong> Built a banner distribution application for the Center of Distributed Learning could use to reward educators for 
		achievements made in working with Blended Mode Courses. This supports manual distribution through email as well as 
		through links on web pages, making use of a simple API written in PHP. The badge system used was the Mozilla Open 
		Badges JavaScript plugin.
	</p>
	<p>
		<strong>Learn Programming with Robots:</strong> Building an HTML5 based try JavaScript application that teaches through manipulating digital robots. 
		It is built utilizing HTML5, JavaScript, and PHP. 
	</p>
	<p>
		<strong>Form Manager:</strong> Responsible for Database Architecture and PHP development for a form creation and management tool used by 
		UCF faculty. This involves recreating an already exisiting application built in coldfusion as well 
		as expanding on the feature set and usability.
	</p>
	<h3 class="resume">Kittatinny Mountain Scout Reservation (June 2006 - August 2007)<br/> Central NJ Council: Boyscouts of America, Dayton NJ</h3>
	<h4>Camp Counselor in Training</h4>
	<p>
		<strong>Responsibilities:</strong> Learned camp procedures, rules, and workflow. Assisted staff in running workshops and camp maintenance.
	</p>
	<h4>Camp Counselor and Instructor</h4>
	<p>
		<strong>Responsibilities:</strong> Conducted workshops pertaining to survival skills for approximately 180 campers, over an 8 week period, 
		and provided assistance in camp maintenance and inventory. Organized and maintained records of camper’s progress through 
		the 8 week workshops. Represent the camp in a positive and friendly manner when assisting campers and adult leaders. 
	</p>
	<h2>Awards and Honors</h2>
	<ul class="markedlist">
		<li>Deans List (2011-2013, University of Central Florida)
		<li>Eagle Scout Award (2009, Boy Scout Troop 33)</li>
		<li>World Finalist (2006, FIRST Robotics Team 25)</li>
		<li>NJ Regional Champion (2006 - 2008, FIRST Robotics Team 25)</li>
		<li>NJ Regional FInalist (2009, FIRST Robotics Team 25)</li>
	</ul>
	<h2>Languages, Frameworks, &amp; Software</h2>
	<ul class="markedlist">
		<li>HTML, XTHML, HTML5, XML</li>
		<li>CSS</li>
		<li>JavaScript, jQuery, jQuery Mobile</li>
		<li>PHP, Fuel, MySQL</li>
		<li>Java, Android</li>
		<li>Actionscript, Flash</li>
		<li>Photoshop, Illustrator</li>
		<li>Git Version Control</li>
	</ul>
	<h2>Skills</h2>
	<ul class="markedlist">
		<li>Experience leading and participating in successful team based projects</li>
		<li>Understanding of Responsive and Adaptive Design for multiple platforms</li>
		<li>Can utilize Object Oriented Design in software development</li>
		<li>Understanding of how to design database schema</li>
		<li>Properly utilization and documentation semantic HTML and Web Accessibility</li>
	</ul>
</div>

<?php
	echo Layout::footer();
?>