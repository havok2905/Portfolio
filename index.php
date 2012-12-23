<?php
	namespace Portfolio;

	require_once("includes/layout.php");
	echo Layout::header("Home");
?>
<h3>What I Can Do</h3>
<div class="center_container">
	<ul class="left">
		<li><a href=""><img src="img/laptop.png"/><p>Development</p></a></li>
		<li><a href=""><img src="img/phone.png"/><p>Mobile</p></a></li>
		<li><a href=""><img src="img/design.png"/><p>Design</p></a></li>
		<li><a href=""><img src="img/graph.png"/><p>Interactivity</p></a></li>
	</ul>
	<div class="clear"></div>
</div>
<div>
	<h3>Inside Of My Head</h3>
</div>
<div>
</div>

<?php
	echo Layout::footer();
?>