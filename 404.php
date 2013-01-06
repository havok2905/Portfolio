<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("404");
?>

<div class="center_container">
	<img src="img/404.png"/>
	<p class="hidden">Error 404. Sorry, file not found.</p>
</div>

<?php
	echo Layout::footer();
?>