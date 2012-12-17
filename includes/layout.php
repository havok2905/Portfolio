<?php
	namespace Portfolio;
	
	/**
	* Handles site page structure
	* @author Christopher McLean
	* @version 1.0
	*/
	class Layout
	{
		// Prints page headers
		public static function header($title = null)
		{
			$response = <<<EOT
<!DOCTYPE html>
<html>
	<head> 
		<title>McLean Web Development and Design $title</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<div>
			<h1><img src="">Christopher McLean</h1>
			<h2>web developer &amp; designer</h2>
			<ul>
				<li><img src=""/><a href="index.php">home</a></li>
				<li><img src=""/><a href="me.php">me</a></li>
				<li><img src=""/><a href="resume.php">resume</a></li>
				<li><img src=""/><a href="blog.php">blog</a></li>
				<li><img src=""/><a href="work.php">work</a></li>
			</ul>
		</div>
EOT;
			return $response;
		}

		// Prints page footers
		public static function footer()
		{
			$response = <<<EOT
		<div>
			<h3>Send Me A Message!</h3>
			<form name="email" action="" method="post">
				<textarea name="message">Message goes here...</textarea>
				<input type="text" name="name" value="name"/>
				<input type="text" name="email" value="email"/>
				<input type="text" name="subject" value="subject"/>
				<input type="submit" name="send" value="send"/>
			</form>
			<h4>Follow Me</h4>
			<ul>
				<li><a href="https://plus.google.com/u/0/108287038105459970762/posts"><img src=""/><span>google+</span></a></li>
				<li><a href="https://github.com/havok2905"><img src=""/><span>github</span></a></li>
				<li><a href="http://www.linkedin.com/pub/christopher-mclean/23/261/789"><img src=""></img><span>linkedin</span></a></li>
			</ul>
			<h4>Contact Info</h4>
			<ul>
				<li>254-424-4921</li>
				<li>mclean.webdev@gmail.com</li>
				<li>1829 Loftway Circle, Apt 1422</li>
				<li>Orlando Florida, 32826</li>
			</ul>
		</div>
	</body>
</html>
EOT;
			return $response;
		}
	}
?>