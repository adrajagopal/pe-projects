<?php include("../../../header.php"); ?>

<inner-column>
	<h1 class="xl-voice">Calculate the area of a rectangular room</h1>
	
	<h2 class="large-voice">No L-shapes allowed.</h2>
	
	<p class="medium-voice">Enter the width and length (in feet) of a rectangular room and get the area in square feet and square meters.</p>
	
	<form>

		<label class="field text span-two">
			<span class="label">Room length</span>
			<input-container>
				<input type="number" min="1" required id="length">
			</input-container>
		</label>

		<label class="field text span-two">
			<span class="label">Room width</span>
			<input-container>
				<input type="number" min="1" required id="width">
			</input-container>
		</label>
		
		<div class="button-container span-two">
			<button type="submit" name="submitted">Submit</button>
		</div>
				
	</form>
	
	<div id="form-result"></div> <!-- could replace this with <output> -->
</inner-column>

<script src="projects/exercises-for-programmers/room-area/script.js"></script>



<?php include(getFile("site-footer.php"));?>