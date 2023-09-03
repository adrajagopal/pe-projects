<form method="POST" class="paint-calculator">

	<label class="field text">
		<input-container>
			<input type="number"
				name="lengthFeet"
				min="0"
				step="1"
				value="<?=$lengthFeet?>"
			>
			<span class="append">feet</span>
		</input-container>
	</label>

	<label class="field text">
		<input-container>
			<input type="number"
				name="lengthInches"
				min="0"
				max="12"
				step="1"
				value="<?=$lengthInches?>"
			>
			<span class="append">inches</span>
		</input-container>
	</label>

	<label class="field text">
		<input-container>
			<input type="number"
				name="widthFeet"
				min="0"
				value="<?=$widthFeet?>"
			>
			<span class="append">feet</span>
		</input-container>
	</label>

	<label class="field text">
		<input-container>
			<input type="number"
				name="widthInches"
				min="0"
				max="12"
				value="<?=$widthInches?>"
			>
			<span class="append">inches</span>
		</input-container>
	</label>


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

	<div class="button-container span-two">
		<button type="submit" name="submitted">Calculate</button>
	</div>

</form>