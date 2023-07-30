<?php include("header.php");?>

<?php
	$submissionName = "";
	$submissionCity ="";
	$submissionReason ="";
	$submissionReference ="";
	$nameError = false;
	$cityError = false;
	$reasonError = false;
	$referenceError = false;

	if(isset($_POST["submitted"])) {
		$submissionFields = [
			$submissionName = $_POST["submissionName"],
			$submissionCity =$_POST["submissionCity"],
			$submissionReason =$_POST["submissionReason"],
			$submissionReference =$_POST["submissionReference"]
		];

		if (isset($submissionName) == false OR strlen($submissionName) === 0) {
			$nameError = true;
		}
		if (isset($submissionCity) == false OR strlen($submissionCity) === 0) {
			$cityError = true;
		}
		if (isset($submissionReason) == false OR strlen($submissionReason) === 0) {
			$reasonError = true;
		}
		if (isset($submissionReference) == false OR strlen($submissionReference) === 0) {
			$referenceError = true;
		}
	}

?>

<section class="inner-column">
	<h1 class="xxl-voice">Suggest a trail</h1>

	<form method="POST">
		<h2 class="xl-voice">Are we missing a fantastic trail? Let us know.</h2>

		<fieldset class="field short-text">
			<legend class="large-voice">What's the name of the trail?</legend>
			<input type="text" name="submissionName">
			<?php if (isset($nameError) & $nameError == true) {
				echo "<p class='warning'>Please enter a city name.</p>";
			} ?>
		</fieldset>
		
		<fieldset class="field short-text">
			<legend class="large-voice">What city is the trail in, or what city is nearest?</legend>
			<input type="text" name="submissionCity">
			<?php if (isset($cityError) & $cityError == true) {
				echo "<p class='warning'>Please include the location of the trail, to the nearest city.</p>";
			} ?>
		</fieldset>

		<fieldset class="field short-text">
			<legend class="large-voice">Why do you love this trail?</legend>
			<input type="text" name="submissionReason">
			<?php if (isset($reasonError) & $reasonError == true) {
				echo "<p class='warning'>Filling in this field helps us decide what trails to curate</p>";
			} ?>
		</fieldset>

		<fieldset class="field short-text">
			<legend class="large-voice">Where can we learn about this trail?</legend>
			<p class="medium-voice">Please share a link for us to review.</p>
			<input type="text" name="submissionReference">
			<?php if (isset($referenceError) & $referenceError == true) {
				echo "<p class='warning'>Please include a link to the trail</p>";
			} ?>
		</fieldset>	

		<div class="submit-container">
			<button type="submit" name="submitted">Submit</button>
			<!-- <p class="warning">Please make sure to fill out all the information for this trail</p> -->
		</div>
		
		<?php
			if (strlen($submissionName) * strlen($submissionCity) * strlen($submissionReason) * strlen($submissionReference) == 0) {
				echo "<p class='warning'>Please fill out all fields before submitting.</p>";
			} else {
				echo "<p class='success'>Thanks for suggesting a new trail! Our team will review your submission to add to our curated list.</p>";
			}
		?>

	</form>

</section>
<?php include("footer.php");?>