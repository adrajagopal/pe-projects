<?php
	include("../header.php");
?>

<section class="graphics-intro">
	<inner-column>
		<?php include(getFile('modules/graphics/graphics-intro/template.php'));?>
	</inner-column>
</section>

<section class="graphics-body">
	<inner-column>
		<?php include(getFile('modules/graphics/graphics-body/template.php'));?>
	</inner-column>
</section>

<?php
	include(getFile('site-footer.php'));
?>