<?php 
	namespace Portfolio; 

	require_once("classes/bootstrap.php");
	echo Layout::header("403");
?>

<div class="center_container">
	<img src="/Project4/img/403.png" class="half center" alt="403 error"/>
	<p class="hidden">Error 403. Sorry, access denied.</p>
</div>

<?= Layout::footer(); ?>