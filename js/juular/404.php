<?php
$body = <<<EOT
	<h2> 404 file not found </h2>
	<a href="default_sub" class="lightbox_sub">TAB TEST</a>
EOT;

echo $body.$_POST["name"];
?>
