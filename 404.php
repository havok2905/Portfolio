<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("404");
?>

<div class="center_container">
	<img src="/Portfolio/img/404.png" class="half center" alt="404 error"/>
	<p class="hidden">Error 404. Sorry, access denied.</p>
</div>

<?= Layout::footer(); ?>