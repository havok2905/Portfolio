<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	
	echo Layout::header("Resume");
?>

<div class="page background shadow">
	<h2>Resume for Christopher William McLean</h2>
	<dl>
		<dt>Address- </dt>
			<dd> 1829 Loftway Circle APT 1422, Orlando FL 32826</dd>
		<dt>Email- </dt>
			<dd> mclean.webdev@gmail.com</dd>
		<dt>Cell- </dt>
			<dd> 254-424-4921</dd>
		<dt>Website- </dt>
			<dd> www.mcleancode.com</dd>
	</dl>
	<h2>Education</h2>
	<ul>
		<li>University of Central Florida</li>
		<li>Orlando Florida</li>
		<li>Expected Graduation May 2013</li>
		<li>Bachelor of Arts in Digital Media</li>
		<li>Concentration: Web Design</li>
		<li>Cumulative GPA: 3.31</li>
		<li>Concentration GPA: 3.61</li>
		<li>Dean's List - Fall 2011 - Spring 2013</li>
	</ul>
	<h2>Employment</h2>
	<h3>Techranger : University of Central Florida (May 2012 - Present)</h3>
	<ul>
		<li>Developed and managed,  accessible, section 508 compliant course web pages for a University with over 50,000 students. </li>
		<li>Developed a badge award distribution system for UCF faculty utilizing PHP, JavaScript, and Mozilla Open Badges API.</li>
		<li>Developed an HTML5 driven "Learn Programming" tool to aid new programming students. It focuses on allowing students to write simple JavaScript to manipulate digital robots through an in browser code editor.</li>
		<li>Wrote and updated tutorials on web development topics such as HTML5 and FuelPHP.</li>
		<li>Took part in student employee panel for discussing effective online education.</li>
		<li>Developing A Badge REST API and Badge Management tools in FuelPHP for use in future web applications.</li>
	</ul>
	<h3>Camp Instructor: Kittatinny Mountain Scout Reservation (June 2006 - Aug 2007)</h3>
	<ul>
		<li>Conducted workshops pertaining to survival skills for approximately 180 campers, over an 8 week period, and provided assistance in camp maintenance and inventory. Organized and maintained records of camper's progress through the 8 week workshops.</li>
	</ul>
	<h2>Honors and Awards</h2>
	<h3>University of Central Florida (2009 - 2013)</h3>
	<ul>
		<li>Attended Student Panel on Online Education: Took part in a student panel for the discussion of the effectiveness of education in regards to online environments with the purpose of educating professors.</li>
	</ul>
	<h3>Boy Scouts of America, Troop 33 (2006-2009)</h3>
	<ul>
		<li>Eagle Scout Award 2009: Organized and collected over 500 toys for the Marine Corps Toy for Tots program. Maintained records of toy inventory, collection events, contacts, and scout involvement for use in a final project presentation.</li>
	</ul>
	<h3>FIRST Robotics Competition (2005 - 2009)</h3>
	<ul>
		<li>1 World Finalist Medal out of 350 teams and various Regional Champion Medals</li>
	</ul>
	<h2>LANGUAGES, FRAMEWORKS, AND SOFTWARE</h2>
	<ul>
		<li>JavaScript,  JQuery, Mobile jQuery, D3.js</li>
		<li>PHP, Fuel PHP, MySQL, PDO</li>
		<li>CSS3</li>
		<li>Ruby on Rails</li>
		<li>XML, XHTML, HTML5, SVG</li>
		<li>Java, Android Development</li>
		<li>Actionscript 3, Flash</li>
		<li>Git Version Control</li>
		<li>Photoshop, Illustrator, Flash</li>
		<li>Autodesk Maya, Autodesk 3D Studio Max</li>
	</ul>
	<h2>Skills</h2>
	<ul>
		<li>Full understanding of how to design layouts and documents for accessibility</li>
		<li>Utilizes object oriented design principles and software design patterns when applicable</li>
		<li>Uses graphic design theory, responsive design, and adaptive design to craft dynamic user experiences</li>
		<li>Effectively leads team projects with a variable number of members,  ranging from five to twenty-five</li>
	</ul>
</div>

<?= Layout::footer(); ?>