<?php include("../../../header.php"); ?>

<inner-column>
	<h1 class="xl-voice">Simple math</h1>
	
	<h2 class="large-voice">sum / difference / product / quotient</h2>
	
	<p class="medium-voice">Enter two WHOLE numbers and get the result of four basic math operations between those two numbers.</p>
	
	<form>

		<label class="field text span-two">
			<span class="label">Enter the first whole number</span>
			<input-container>
				<input type="number" id="firstNumber">
			</input-container>
			<!-- <span class="warning">warning</span> -->
		</label>

		<label class="field text span-two">
			<span class="label">Enter the second whole number</span>
			<input-container>
				<input type="number" id="secondNumber">
			</input-container>
			<!-- <span class="warning">warning</span> -->
		</label>
		
		<div class="button-container span-two">
			<button type="submit" name="submitted">Submit</button>
			<!-- <span class="warning">warning</span> -->
		</div>
				
	</form>
	
	<div id="form-result"></div> <!-- could replace this with <output> -->
</inner-column>

<script src="projects/exercises-for-programmers/simple-math/script.js"></script>



<?php include(getFile("site-footer.php"));?>