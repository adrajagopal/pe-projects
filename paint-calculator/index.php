<?php
	include("../header.php");
?>

<?php
	$widthFeet = 0;
	$widthInches = 0;
	$lengthFeet = 0;
	$lengthInches = 0;
?>

<h1 class="page-title">How much paint do you need?</h1>

<p class="form-context">When you're buying paint, you never want to run out too soon. Every gallon of paint covers 350-ish square feet, but then you spill some, need to repaint some sections, and you might want to have an extra gallon lying around to cover up scuffs and patch holes.</p>

<p class="form-context">We built this calculator to help you paint rooms that are perfectly rectangular with no nooks, no crannies, and no protuberant closets.</p>

<h2 class="page-title">Enter your room dimensions:</h2>

<form method="POST">
	<div class="field">
		<p class="field-title">Length</p>
		<div class="measurements">
			<label for="">Feet</label>
			<input type="number"
				name="lengthFeet"
				min="0"
				value=<?=$lengthFeet?>
			>
			<label>Inches</label>
			<input type="number"
				name="lengthInches"
				min="0"
				max="12"
				value=<?=$lengthInches?>
			>
		</div>
	</div>

	<div class="field">
		<p class="field-title">Width</p>
		<div class="measurements">
			<label for="">Feet</label>
			<input type="number"
				name="widthFeet"
				min="0"
				value=<?=$widthFeet?>
			>
			<label>Inches</label>
			<input type="number"
				name="widthInches"
				min="0"
				max="12"
				value=<?=$widthInches?>
			>
		</div>
	</div>

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
				// echo "Please enter at least one positive value for width.";
			}
		}

		// Step 2 - Get total length + provide validation
		if (isset($lengthFeet) OR isset($lengthInches)) {
			if ($lengthFeet + $lengthInches > 0) { // "are one of ft or inches > 0?"
				$lengthSum = $lengthFeet + ($lengthInches / 12);
				// echo $lengthSum;
			}

			elseif ($lengthFeet + $lengthInches === 0) { //just being overly explicit here
				// echo "Please enter at least one positive value for length.";
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

<!-- 
	* Ask user for length in feet and inches
	* Ask user for width in feet and inches
	* Convert inches to a fraction and add to feet
	* Multiply length times width
	* Divide by 350
	* Round up to the nearest integer ←this is gallons needed
	* Round square footage to the second float ← this is square footage
	* Tell the user how many square feet they have and how many gallons of paint they need
-->


<?php include("../footer.php");?>