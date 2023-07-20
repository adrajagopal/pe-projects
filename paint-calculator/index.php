<?php
	include("../header.php");
?>

<?php $skills = ["Properly nested HTML", "CSS", "SQL"]; ?>


<h1 class="page-title">How much paint do you need?</h1>

<p class="form-context">When you're buying paint, you never want to run out too soon. Every gallon of paint covers 350-ish square feet, but then you spill some, need to repaint some sections, and you might want to have an extra gallon lying around to cover up scuffs and patch holes.</p>

<p class="form-context">We built this calculator to help you paint rooms that are perfectly rectangular with no nooks, no crannies, and no protuberant closets.</p>

<form action="">
	<div class="field">
		<label for="">Room length</label>
		<input type="text">
		<input type="text">
	</div>
	<div class="field">
		<label for="">Room width</label>
		<input type="text">
		<input type="text">
	</div>
	<button>Calculate</button>
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