<?php
	namespace Portfolio;

	require_once("includes/layout.php");
	echo Layout::header("Resume");
?>

<div>
	<h3>Christopher W. McLean</h3>
	<ul>
		<li>Address: 1829 Loftway Circle Apartment 1422, Orlando Florida, 32826</li>
		<li>Phone: 254-424-4921</li>
		<li>Email: mclean.webdev@gmail.com</li>
		<li>References available on request</li>
	</ul>
	<ul>
		<li><a href="">Download PDF</a></li>
		<li><a href="">Download DOC</a></li>
		<li><a href="">Download DOCX</a></li>
	</ul>
	<hr/>
	<h4>Ojective</h4>
	<p>
		Seeking a position as a web developer utilizing client-side and server-side technlogy to create new content for the web.
	</p>
	<h4>Education</h4>
	<ul>
		<li>University of Central Florida</li>
		<li>Orlando Florida</li>
		<li>Expected Graduation: May 2013</li>
		<li>Bachelor of Arts in Digital Media</li>
		<li>Ceoncentration: Web Design</li>
		<li>Cumulative GPA: 3.274</li>
		<li>Major GPA: 3.504</li>
		<li>Deans List Fall 2011 - Fall 2012</li>
	</ul>
	<h4>Relevant Coursework</h4>
	<ul>
		<li>Web Design Workshop</li>
		<li>Media for eCommerce</li>
		<li>User Centered Design</li>
		<li>Object Oriented Programming</li>
		<li>Internet Interaction</li>
		<li>Computer Graphic Design</li>
	</ul>
	<h4>Coursework</h4>
	<h5>Web Design Workshop</h5>
	<dl>
		<dt>Title</dt>
		<dd>Front-End Exchange</dd>
		<dt>Role</dt>
		<dd>Lead Developer/Project Manager</dd>
		<dt>Technologies</dt>
		<dd>HTML, CSS, JavaScript, PHP, Dr. Moshell's API</dd>
		<dt>Description</dt>
		<dd>
			As a team, develop and test a responsive and mobile banking application using a provided 
			API hosted on the professor's server. This application will be used by other courses at UCF
			for exchanging fake credit and fake company stock. 
		</dd>
	</dl>
	<h4>Employment</h4>
	<h5>University of Central Florida (May 2012 - Present)<br/> Center For Distributed Learning, Orlando Florida</h5>
	<h6>Techranger</h6>
	<p>
		Resposibilities: Developed and managed accessible course websites for a University with over 50,000 students 
		using semantic markup and CSS. Worked on internal web applications to benefit the department using server-side 
		and client-side languages such as PHP, Python, and  JavaScript.  Responsible for presentations on web accessibility 
		as they pertain to online education.
	</p>
	<h6>Projects</h6>
	<dl>
		<dt>Blended Open Badges</dt>
		<dd>
			Built a banner distribution application for the Center of Distributed Learning could use to reward educators for 
			achievements made in working with Blended Mode Courses. This supports manual distribution through email as well as 
			through links on web pages, making use of a simple API written in PHP. The badge system used was the Mozilla Open 
			Badges JavaScript plugin.
		</dd>
		<dt>Learn Programming with Robots</dt>
		<dd>
			Building an HTML5 based try JavaScript application that teaches through manipulating digital robots through
			set challenges. It is built utilizing HTML5, JavaScript, and PHP. 
		</dd>
		<dt>Form Manager</dt>
		<dd>
			Responsible for Database Architecture and PHP development for a form creation and management tool used by 
			UCF faculty. This involves recreating an already exisiting application built in coldfusion as well 
			as expanding on the feature set and usability.
		</dd>
	</dl>
	<h5>Kittatinny Mountain Scout Reservation (June 2006 - August 2007)<br/> Central NJ Council: Boyscouts of America, Dayton NJ</h5>
	<h6>Camp Counselor in Training</h6>
	<p>
		Responsibilities: Learned camp procedures, rules, and workflow. Assisted staff in running workshops and camp maintenance.
	</p>
	<h6>Camp Counselor and Instructor</h6>
	<p>
		Responsibilities: Conducted workshops pertaining to survival skills for approximately 180 campers, over an 8 week period, 
		and provided assistance in camp maintenance and inventory. Organized and maintained records of camper’s progress through 
		the 8 week workshops. Represent the camp in a positive and friendly manner when assisting campers and adult leaders. 
	</p>
	<h4>Awards and Honors</h4>
	<ul>
		<li>Deans List (2011-2013, University of Central Florida)
		<li>Eagle Scout Award (2009, Boy Scout Troop 33)</li>
		<li>World Finalist (2006, FIRST Robotics Team 25)</li>
		<li>NJ Regional Champion (2006 - 2008, FIRST Robotics Team 25)</li>
		<li>NJ Regional FInalist (2009, FIRST Robotics Team 25)</li>
	</ul>
	<h4>Languages, Frameworks, &amp; Software</h4>
	<ul>
		<li>HTML, XTHML, HTML5, XML</li>
		<li>CSS</li>
		<li>JavaScript, jQuery, jQuery Mobile</li>
		<li>PHP, Fuel, MySQL</li>
		<li>Java, Android</li>
		<li>Actionscript, Flash</li>
		<li>Photoshop, Illustrator</li>
		<li>Git Version Control</li>
	</ul>
	<h4>Skills</h4>
	<ul>
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