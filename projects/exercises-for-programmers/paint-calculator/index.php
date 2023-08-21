<?php
	include("../../../header.php");
?>

<?php
	$widthFeet = 0;
	$widthInches = 0;
	$lengthFeet = 0;
	$lengthInches = 0;
?>
<section class="form-body">
	<div class="inner-column">
		<h1 class="xxl-voice">How much paint do you need?</h1>

		<p class="medium-voice">When you're buying paint, you never want to run out too soon. Every gallon of paint covers 350-ish square feet, but then you spill some, need to repaint some sections, and you might want to have an extra gallon lying around to cover up scuffs and patch holes.</p>

		<p class="medium-voice">We built this calculator to help you paint rooms that are perfectly rectangular with no nooks, no crannies, and no protuberant closets.</p>

		<h2 class="xl-voice">Enter your room dimensions:</h2>

		<form method="POST">
			<fieldset class="field short-text">
				<legend>Length</legend>
				<div class="label-input-group">
					<label for="">Feet</label>
					<input type="number"
						name="lengthFeet"
						min="0"
						value="<?=$lengthFeet?>"
					>
					<label>Inches</label>
					<input type="number"
						name="lengthInches"
						min="0"
						max="12"
						value="<?=$lengthInches?>"
					>
				</div>
			</fieldset>

			<fieldset class="field short-text">
				<legend>Width</legend>
				<div class="label-input-group">
					<label for="">Feet</label>
					<input type="number"
						name="widthFeet"
						min="0"
						value="<?=$widthFeet?>"
					>
					<label>Inches</label>
					<input type="number"
						name="widthInches"
						min="0"
						max="12"
						value="<?=$widthInches?>"
					>
				</div>
			</fieldset>

		<?php
			if (isset($_POST["submitted"])) {

				$widthFeet = $_POST["widthFeet"];
				$widthInches = $_POST["widthInches"];
				$lengthFeet = $_POST["lengthFeet"];
				$lengthInches = $_POST["lengthInches"];


				// Step 1 - Get total width + provide validation
				if (isset($widthFeet) OR isset($widthInches)) {
					if ($widthFeet + $widthInches > 0) { // "are one of ft or inches > 0?"
						$widthSum = $widthFeet + ($widthInches / 12); 
						// echo $widthSum;
					}

					elseif ($widthFeet + $widthInches === 0) { //just being overly explicit here
						echo "<p 'class=medium-voice'> Please enter at least one positive value for width. </p>";
					}
				}

				// Step 2 - Get total length + provide validation
				if (isset($lengthFeet) OR isset($lengthInches)) {
					if ($lengthFeet + $lengthInches > 0) { // "are one of ft or inches > 0?"
						$lengthSum = $lengthFeet + ($lengthInches / 12);
						// echo $lengthSum;
					}

					elseif ($lengthFeet + $lengthInches === 0) { //just being overly explicit here
						echo "<p 'class=medium-voice'> Please enter at least one positive value for length. </p>";
					}
				}

				// Step 3 - Get multiplied room area & rounded gallon number
				if (isset($widthSum) AND isset($lengthSum) AND ($widthSum * $lengthSum > 0)) {
					$roomArea = $widthSum * $lengthSum;
					$gallons = intval(ceil($roomArea/350));
				}
			}
		?>

			<button type="submit" name="submitted">Calculate</button>
		</form>


		<?php if (isset($gallons)) { 
					if ($gallons === 1) { ?>
						<p class="form-result">Your room is <?=$roomArea?> square feet, so you'll only need <?=$gallons?> gallon to paint it.</p>
			<?php }
					elseif ($gallons > 1) { ?>
						<p class="form-result">Your room is <?=$roomArea?> square feet, and you'll need <?=$gallons?> gallons to paint it.</p>
			<?php }

				} ?>
	</div>
</section>



<?php include("../../../site-footer.php");?>