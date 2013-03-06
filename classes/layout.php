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
		<link rel="stylesheet" type="text/css" href="/Project4/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Project4/css/main.css"/>
		<script type="text/javascript" src="/Project4/js/jquery.js"></script>
		<script type="text/javascript" src="/Project4/js/main.js"></script>
		<script type="text/javascript" src="/Project4/js/sh/scripts/shCore.js"></script>
		<script type="text/javascript" src="/Project4/js/sh/scripts/shBrushJScript.js"></script>
		<script type="text/javascript" src="/Project4/js/sh/scripts/shBrushXml.js"></script>
		<link href="/Project4/js/sh/styles/shCore.css" rel="stylesheet" type="text/css" />
		<link href="/Project4/js/sh/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			SyntaxHighlighter.all();
		</script>
	</head>
	<body>
			<div class="container">
				<nav id="social">
					<a href="https://plus.google.com/108287038105459970762/posts" target="_blank"><img src="/Project4/img/google.png" alt="google plus icon"/><span class="hidden">Google Plus</span></a>
					<a href="https://github.com/havok2905" target="_blank"><img src="/Project4/img/github_alt.png" alt="github icon"/><span class="hidden">Github</span></a>
					<a href="http://www.linkedin.com/profile/view?id=81246489" target="_blank"><img src="/Project4/img/linkedin.png" alt="linked in icon"/><span class="hidden">Linked In</span></a>
				</nav>
				<div class="clear"></div>
			</div>
			<div id="navbar">
				<div class="container">
					<h1><a href="/Project4/index/">Christopher McLean</a></h1>
					<nav>
						<a href="/Project4/index/">Home</a>
						<a href="/Project4/me/">Me</a>
						<a href="/Project4/resume/">Resume</a>
						<a href="/Project4/blog/">Blog</a>
						<a href="/Project4/work/" class="last-right">Work</a>
					</nav>
				</div>
			</div>
			<div class="container">
				<ul id="specs">
					<li>Web | </li>
					<li>Mobile | </li>
					<li>Graphics | </li>
					<li>Design</li>
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
				<h2>Send Me A Message</h2>
				<form action="" method="post">
					<div class="input">
						<label for="name">Name: </label>
						<input type="text" name="name"/>
					</div>
					<div class="input">
						<label for="subject">Subject: </label>
						<input type="text" name="subject"/>
					</div>
					<div class="input">
						<label for="email">Email: </label>
						<input type="text" name="email"/>
					</div>
					<div class="input">
						<label for="message">Message: </label>
						<textarea name="message"></textarea>
					</div>
					<input type="submit" class="submit" value="send"/>
				</form>
				<div id="contact">
					<h3>Contact Me!</h3>
					<ul>
						<li>254-424-4921</li>
						<li>mclean.webdev@gmail.com</li>
						<li>Orlando, FL 32826</li>
					</ul>
					<nav>
						<a href="https://plus.google.com/108287038105459970762/posts" target="_blank"><img src="/Project4/img/google_w.png" alt="google plus icon"/><span class="hidden">Google Plus</span></a>
						<a href="https://github.com/havok2905" target="_blank"><img src="/Project4/img/github_alt_w.png" alt="github icon"/><span class="hidden">Github</span></a>
						<a href="http://www.linkedin.com/profile/view?id=81246489" target="_blank"><img src="/Project4/img/linkedin_w.png" alt="linked in icon"/><span class="hidden">Linked In</span></a>
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