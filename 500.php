<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("500");
?>

<div class="center_container">
	<img src="/Project4/img/403.png" class="half center" alt="403 error"/>
	<p class="hidden">Error 500. Sorry, server error.</p>
</div>

<?= Layout::footer(); ?>