<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("500");
?>

<div class="center_container">
	<img src="/Portfolio/img/500.png" class="half" alt="500 error"/>
	<p class="hidden">Error 500. Sorry, there is a server error. I am working on it as fast as I can.</p>
</div>

<?php
	echo Layout::footer();
?>