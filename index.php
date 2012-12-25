<?php
	namespace Portfolio;

	require_once("includes/layout.php");
	echo Layout::header("Home");
?>
<img src="http://placekitten.com/1100/400" class="full"/>
<h2>What I Can Do</h3>
<div class="center_container">
	<ul class="left">
		<li><a href="development_lightbox" class="development_lightbox"><img src="img/laptop.png"/><p>Development</p></a></li>
		<li><a href="mobile_lightbox" class="mobile_lightbox"><img src="img/phone.png"/><p>Mobile</p></a></li>
		<li><a href="design_lightbox" class="design_lightbox"><img src="img/design.png"/><p>Design</p></a></li>
		<li><a href="interactivity_lightbox" class="interactivity_lightbox"><img src="img/graph.png"/><p>Interactivity</p></a></li>
	</ul>
	<div class="clear"></div>
</div>
<div>
	<h2>Inside Of My Head</h3>
</div>


<?php
	echo Layout::footer();
?>