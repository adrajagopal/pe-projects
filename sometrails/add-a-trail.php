<?php include("header.php");?>

<section class="inner-column">
	<h1 class="xxl-voice">Suggest a trail</h1>

	<form method="_POST">
		<h2 class="xl-voice">Are we missing a fantastic trail? Let us know.</h2>

		<fieldset class="field short-text">
			<legend class="large-voice">What's the name of the trail?</legend>
			<input type="text">
			<p class="warning">Please include the trail name</p>
		</fieldset>
		
		<fieldset class="field short-text">
			<legend class="large-voice">What city is the trail in, or what city is nearest?</legend>
			<input type="text">
			<p class="warning">Please include the location of the trail, to the nearest city</p>
		</fieldset>

		<fieldset class="field short-text">
			<legend class="large-voice">Why do you love this trail?</legend>
			<input type="text">
			<p class="warning">Filling in this field helps us decide what trails to curate.</p>
		</fieldset>

		<fieldset class="field short-text">
			<legend class="large-voice">Where can we find more about this trail?</legend>
			<p class="medium-voice">Please share a link for us to review.</p>
			<input type="text">
			<p class="warning">Please include a link to the trail</p>
		</fieldset>	

		<div class="submit-container">
			<button type="submit" name="submitted">Submit</button>
			<p class="warning">Please make sure to fill out all the information for this trail</p>
		</div>
		
		<p class="success">Thanks for suggesting a new trail! Our team will review your submission to add to our curated list.</p>	
	</form>

</section>
<?php include("footer.php");?>