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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="header_container">
				<h1><img src="img/header.png"/><span>Christopher McLean, web developer and designer</span></h1>
				<ul class="nav">
					<li><a href="index.php" class="house_icon">home</a></li>
					<li><a href="me.php" class="me_icon">me</a></li>
					<li><a href="resume.php" class="resume_icon">resume</a></li>
					<li><a href="blog.php" class="blog_icon">blog</a></li>
					<li><a href="work.php" class="work_icon">work</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		<div class="container">
EOT;
			return $response;
		}

		// Prints page footers
		public static function footer()
		{
			$response = <<<EOT
		</div>
		<div class="footer">
			<div class="header_container">
				<h3>Send Me A Message!</h3>
				<form name="email" action="" method="post">
					<textarea name="message" class="styledform"></textarea>
					<div class="input_container">
						<input class="styledform" type="text" name="name" placeholder="name"/>
						<input class="styledform" type="text" name="email" placeholder="email"/>
						<input class="styledform" type="text" name="subject" placeholder="subject"/>
						<input class="submit" type="submit" name="send" value="send"/>
					</div>
				</form>
					<div class="contact_sub_container">
						<h4>Follow Me</h4>
						<ul class="footertext inlinelist">
							<li><a href="https://plus.google.com/u/0/108287038105459970762/posts"><img src="img/googlethumb.png"/><span>google+</span></a></li>
							<li><a href="https://github.com/havok2905"><img src="img/gitthumb.png"/><span>github</span></a></li>
							<li><a href="http://www.linkedin.com/pub/christopher-mclean/23/261/789"><img src="img/linkedthumb.png"></img><span>linkedin</span></a></li>
						</ul>
					</div>
					<div class="contact_sub_container">
						<h4>Contact Info</h4>
						<ul class="footertext">
							<li>254-424-4921</li>
							<li>mclean.webdev@gmail.com</li>
							<li>1829 Loftway Circle, Apt 1422</li>
							<li>Orlando Florida, 32826</li>
						</ul>
					</div>
			</div>
		</div>
	</body>
</html>
EOT;
			return $response;
		}
	}
?>