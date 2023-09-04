<?php
	include("../../../header.php");
?>

<?php
	$widthFeet = 0;
	$widthInches = 0;
	$lengthFeet = 0;
	$lengthInches = 0;
?>
<section class="form-intro">
	<inner-column>
		<h1 class="xl-voice">How much paint do you need?</h1>

		<p class="medium-voice">When you're buying paint, you never want to run out too soon. Every gallon of paint covers 350-ish square feet, but then you spill some, need to repaint some sections, and you might want to have an extra gallon lying around to cover up scuffs and patch holes.</p>

		<p class="medium-voice">We built this calculator to help you paint rooms that are perfectly rectangular with no nooks, no crannies, and no protuberant closets.</p>

		<h2 class="large-voice">Enter your room dimensions:</h2>
	</inner-column>
</section>

<section class="form-body">
	<inner-column>
		<?php include(getFile('modules/form-paint-calculator/template.php')) ; ?>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php if (isset($gallons)) { 
					if ($gallons === 1) { ?>
						<p class="form-result">Your room is <?=$roomArea?> square feet, so you'll only need <?=$gallons?> gallon to paint it.</p>
			<?php }
					elseif ($gallons > 1) { ?>
						<p class="form-result">Your room is <?=$roomArea?> square feet, and you'll need <?=$gallons?> gallons to paint it.</p>
			<?php }

				} ?>
	</inner-column>
</section>

<?php include(getFile('site-footer.php'));?>