<?php
	namespace Portfolio;

	require_once("includes/bootstrap.php");
	echo Layout::header("404");
?>

<div class="center_container">
	<img src="/Portfolio/Portfolio/img/403.png" class="half" alt="403 error"/>
	<p class="hidden">Error 404. Sorry, access denied.</p>
</div>

<?php
	echo Layout::footer();
?>