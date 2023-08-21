<?php
	include("../header.php");
?>

<section class="graphics-intro">
	<div class="inner-column">
		<?php include(getFile('modules/graphics/graphics-intro/template.php'));?>
	</div>
</section>

<section class="graphics-body">
	<div class="inner-column">
		<?php include(getFile('modules/graphics/graphics-body/template.php'));?>
	</div>
</section>

<?php
	include(getFile('site-footer.php'));
?>