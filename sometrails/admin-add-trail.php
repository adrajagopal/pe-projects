<?php include("header.php");?>

<?php
	$trailName = "";
	$trailCity = "";
	$trailType = "";
	$trailLength = "";
	$trailAllowsDogs = "";
	$trailDescription = "";
	$trailActivities = "";
	$trailPortrait = "";

	$hasAllFields = false;

	if(isset($_POST["submitted"])) {
		$trailFields = [
			$trailName = $_POST["trailName"],
			$trailCity = $_POST["trailCity"],
			$trailType = $_POST["trailType"],
			$trailLength = $_POST["trailLength"],
			$trailAllowsDogs = $_POST["trailAllowsDogs"],
			$trailDescription = $_POST["trailDescription"],
			$trailActivities = $_POST["trailActivities"],
			$trailPortrait = $_POST["trailPortrait"],
		];

		//check whether value is valid
		if (
			isset($trailFields) AND
			(strlen($trailName) * strlen($trailCity) * strlen($trailType) * strlen($trailLength) * strlen($trailAllowsDogs) * strlen($trailDescription) * strlen($trailActivities) * strlen($trailPortrait) > 0)
			)
		 {
			$hasAllFields = true;
		}
		//create an array from true values

		 if ($hasAllFields) {
			$newTrail = [
				"id" => uniqid("t"),
				"name" => $trailName,
				"city" => $trailCity,
				"type" => $trailType,
				"length" => $trailLength,
				"dog-friendly" => $trailAllowsDogs,
				"description" => $trailDescription,
				"activities" => $trailActivities,
				"portrait" => $trailPortrait
			];
	
			print_r($newTrail);

			$newTrailJson = json_encode($newTrail);

			file_put_contents("trail-list.json", $newTrailJson);
			}
	}

?>

<section class="inner-column">
	<h1 class="xxl-voice">Add a trail to the database</h1>

	<pre style="font-family: monospace"><?php print_r($_POST)?></pre>

	<form method="POST">
		<h2 class="xl-voice">Enter trail details here:</h2>

	<!-- Trail Name -->
		<fieldset class="field short-text">
			<legend class="large-voice">What's the name of the trail?</legend>
			<input type="text" name="trailName" value="<?=$trailName?>" required>
		</fieldset>

	<!-- Trail City -->
		<fieldset class="field short-text">
			<legend class="large-voice">What city is the trail in, or what city is nearest?</legend>
			<input type="text" name="trailCity" value="<?=$trailCity?>" required>
		</fieldset>

	<!-- Trail Type -->
		<fieldset class="field checkbox">
			<legend class="large-voice">What types of trails are there?</legend>
			<div class="checkbox-option">
				<input type="checkbox" id="c1" name="trailType" value="<?=$trailType?>">
				<label for="c1">out and back</label>
			</div>
			<div class="checkbox-option">
				<input type="checkbox" id="c2" name="trailType" value="<?=$trailType?>">
				<label for="c2">loop</label>
			</div>
		</fieldset>

	<!-- Trail Length -->
		<fieldset class="field number">
			<legend class="large-voice">How long is the trail (miles)?</legend>
			<input type="number" name="trailLength" value="<?=$trailLength?>" required min=1 max=200>
		</fieldset>

	<!-- Dog Friendly -->
		<fieldset class="field checkbox">
			<legend class="large-voice">Is the trail dog-friendly?</legend>
			<div class="radio-option">
				<input type="radio" id="rd1" name="trailAllowsDogs" value="<?=$trailAllowsDogs?>" required>
				<label for="rd1">Yes</label>
			</div>
			<div class="radio-option">
				<input type="radio" id="rd2" name="trailAllowsDogs" value="<?=$trailAllowsDogs?>" required>
				<label for="rd2">No</label>
			</div>
		</fieldset>

	<!-- Trail Description -->
		<fieldset class="field long-text">
			<legend class="large-voice">Please provide a trail description</legend>
			<textarea rows="5" cols="30" name="trailDescription" value="<?=$trailDescription?>" required></textarea>
		</fieldset>

	<!-- Trail Activities -->
		<fieldset class="field long-text">
			<legend class="large-voice">Please enter a list of trail activities, separated by commas</legend>
			<textarea rows="5" cols="30" name="trailActivities" value="<?=$trailActivities?>" required></textarea>
		</fieldset>

	<!-- Trail Portrait -->
		<fieldset class="field short-text">
			<legend class="large-voice">Please provide the file path for the trail portrait.</legend>
			<input type="text" name="trailPortrait" value="<?=$trailPortrait?>" required>
		</fieldset>

		<div class="submit-container">
			<button type="submit" name="submitted">Submit</button>
			<!-- <p class="warning">Please make sure to fill out all the information for this trail</p> -->
		</div>
		
		<?php
			if ($hasAllFields) {
				echo "<p class='success'>Thanks for submitting.</p>";
			}
		?>

	</form>

</section>
<?php include("footer.php");?>