<?php
namespace Portfolio; 

class Layout
{
	public static function header($title)
	{
		$response = <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<title>Christopher McLean Web Development and Design $title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="/Portfolio/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Portfolio/css/main.css"/>
		<script type="text/javascript" src="/Portfolio/js/jquery.js"></script>
		<script type="text/javascript" src="/Portfolio/js/main.js"></script>
		<script type="text/javascript" src="/Portfolio/js/sh/scripts/shCore.js"></script>
		<script type="text/javascript" src="/Portfolio/js/sh/scripts/shBrushJScript.js"></script>
		<script type="text/javascript" src="/Portfolio/js/sh/scripts/shBrushXml.js"></script>
		<link href="/Portfolio/js/sh/styles/shCore.css" rel="stylesheet" type="text/css" />
		<link href="/Portfolio/js/sh/styles/shThemeRDark.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			SyntaxHighlighter.all();
		</script>
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
	<body>
			<audio>
				<source src="/Portfolio/mp3/beep.mp3">
				<source src="/Portfolio/mp3/beep.wav">
			</audio>
			<div class="container">
				<nav id="social">
					<a href="https://plus.google.com/108287038105459970762/posts" target="_blank"><img src="/Portfolio/img/google.png" alt="google plus icon"/><span class="hidden">Google Plus</span></a>
					<a href="https://github.com/havok2905" target="_blank"><img src="/Portfolio/img/github_alt.png" alt="github icon"/><span class="hidden">Github</span></a>
					<a href="http://www.linkedin.com/profile/view?id=81246489" target="_blank"><img src="/Portfolio/img/linkedin.png" alt="linked in icon"/><span class="hidden">Linked In</span></a>
				</nav>
				<div class="clear"></div>
			</div>
			<div id="navbar">
				<div class="container">
					<h1><a href="/Portfolio/index/">Christopher McLean</a></h1>
					<nav>
						<a class="nav-link" href="/Portfolio/index/">Home</a>
						<a class="nav-link" href="/Portfolio/me/">Me</a>
						<a class="nav-link" href="/Portfolio/resume/">Resume</a>
						<a class="nav-link" href="/Portfolio/blog/">Blog</a>
						<a class="nav-link" href="/Portfolio/work/" class="last-right">Work</a>
					</nav>
				</div>
			</div>
			<div class="container">
				<ul id="specs" class="unmarked">
					<li>Web - </li>
					<li>Mobile - </li>
					<li>Developer - </li>
					<li>Designer</li>
				</ul>
EOT;
		return $response;
	}

	public static function footer()
	{
		$response = <<<EOT
		</div>
		<footer>
			<div class="container">
				<h2>Need Something Done?</h2>
				<div id="response"></div>
				<form action="controllers/emailcontroller.php" method="post">
					<div class="input">
						<label for="name">Name: </label>
						<input type="text" name="name" id="name" value=""/>
					</div>
					<div class="input">
						<label for="subject">Subject: </label>
						<input type="text" name="subject" id="subject" value=""/>
					</div>
					<div class="input">
						<label for="email">Email: </label>
						<input type="text" name="email" id="email" value=""/>
					</div>
					<div class="input">
						<label for="message">Message: </label>
						<textarea name="message" id="message"></textarea>
					</div>
					<input type="submit" class="submit" value="send"/>
				</form>
				<div id="contact">
					<h3>Get a Hold of Me!</h3>
					<ul>
						<li>254-424-4921</li>
						<li>mclean.webdev@gmail.com</li>
						<li>Orlando, FL 32826</li>
					</ul>
					<nav>
						<a href="https://plus.google.com/108287038105459970762/posts" target="_blank"><img src="/Portfolio/img/google_w.png" alt="google plus icon"/><span class="hidden">Google Plus</span></a>
						<a href="https://github.com/havok2905" target="_blank"><img src="/Portfolio/img/github_alt_w.png" alt="github icon"/><span class="hidden">Github</span></a>
						<a href="http://www.linkedin.com/profile/view?id=81246489" target="_blank"><img src="/Portfolio/img/linkedin_w.png" alt="linked in icon"/><span class="hidden">Linked In</span></a>
					</nav>
				</div>
			</div>
		</footer>
	</body>
</html>
EOT;
		return $response;
	}
}

?>