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
		<title>Christopher McLean Web Development and Design $title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/Portfolio/img/icon_thumb.png"/>
		<link rel="stylesheet" type="text/css" href="/Portfolio/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Portfolio/css/main.css"/>
		<link rel="stylesheet" type="text/css" href="/Portfolio/js/google-code-prettify/prettify.css"/>
		<script type="text/javascript" src="/Portfolio/js/jquery.js"></script>
		<script type="text/javascript" src="/Portfolio/js/google-code-prettify/prettify.js"></script>
		<script type="text/javascript" src="/Portfolio/js/main.js"></script>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-37496106-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	<body onload="prettyPrint()">
		<div class="header">
			<div class="header_container">
				<h1><a href="index.php"><img src="/Portfolio/img/header.png" alt="header"/><span>Christopher McLean, web developer and designer</span></a></h1>
				<ul class="nav">
					<li><a href="/Portfolio/index.php" class="house_icon">home</a></li>
					<li><a href="/Portfolio/me.php" class="me_icon">me</a></li>
					<li><a href="/Portfolio/resume.php" class="resume_icon">resume</a></li>
					<li><a href="/Portfolio/blog.php" class="blog_icon">blog</a></li>
					<li><a href="/Portfolio/work.php" class="work_icon">work</a></li>
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
			if(!isset($_POST["send"]) || $_POST["send"]=="")
			{
				$_POST["send"] = "";
			}
			else if($_POST["send"] == "send")
			{
				$email = $_POST["email"];
				$name = $_POST["name"];
				$subject = $_POST["subject"];
				$message = $_POST["message"];

				$errorarray = Email::validate_lengths($name, $subject, $email, $message);

				$send = true;

				foreach ($errorarray as $key => $value)
				{
					if($value == false)
					{
						$send = false;
					}
				}

				if($send == true)
				{
					$isvalid = Email::validate_email($email);

					if($isvalid == true)
					{
						Email::send($name, $subject, $email, $message);
						Email::log($name, $subject, $email, $message);
					}
				}
			}

			$response = <<<EOT
		</div>
		<div class="footer" id="contact">
			<div class="header_container">
				<h2>Send Me A Message!</h2>
				<div class="contact_sub_container">
					<ul class="footertext inlinelist">
						<li><a target="_blank" href="https://plus.google.com/u/0/108287038105459970762/posts"><img src="/Portfolio/img/googlethumb.png" alt="google plus icon" id="google"/><span>google+</span></a></li>
						<li><a target="_blank" href="https://github.com/havok2905"><img src="/Portfolio/img/gitthumb.png" alt="github icon" id="github"/><span>github</span></a></li>
						<li><a target="_blank" href="http://www.linkedin.com/pub/christopher-mclean/23/261/789"><img src="/Portfolio/img/linkedthumb.png" alt="linkedin icon" id="linkedin"/><span>linkedin</span></a></li>
					</ul>
				</div>
				<div class="contact_sub_container">
					<ul class="footertext inlinelist">
						<li>254-424-4921 - </li>
						<li>mclean.webdev@gmail.com - </li>
						<li>1829 Loftway Circle, Apt 1422 - </li>
						<li>Orlando Florida, 32826</li>
					</ul>
				</div>
				<form id="emailform" name="emailform" action="#emailform" method="post">
					<textarea id="message" name="message" class="styledform"></textarea>
					<div class="input_container">
						<!--[if IE]><input class="styledform" type="text" id="name" name="name" value="name"/><![endif]-->
						<![if !IE]><input class="styledform" type="text" id="name" name="name"  placeholder="name"/><![endif]>
						<!--[if IE]><input class="styledform" type="text" id="email" name="email" value="email"/><![endif]-->
						<![if !IE]><input class="styledform" type="text" id="email" name="email" placeholder="email"/><![endif]>
						<!--[if IE]><input class="styledform" type="text" id="subject" name="subject" value="subject"/><![endif]-->
						<![if !IE]><input class="styledform" type="text" id="subject" name="subject" placeholder="subject"/><![endif]>
						<input class="submit" type="submit" id="send" name="send" value="send"/>
					</div>
				</form>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>
EOT;
			return $response;
		}
	}
?>