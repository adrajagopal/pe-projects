<?php include("../../../header.php"); ?>

<!-- 

pseudo-code


-->

<inner-column>
	<h1 class="xl-voice">Self-checkout</h1>
	
	<h2 class="large-voice">items / subtotal / total</h2>
	
	<p class="medium-voice">Enter your quantities and prices of each item, and receive a tax, subtotal and total.</p>
	
	<form>

		<span class="label span-two">Item 1</span>
		<label class="field text">
			<span class="label">Quantity</span>
			<input-container>
				<input type="number"
					name="quantity"
					min="1"
					value=""
					required
				>
			</input-container>
		</label>

		<label class="field text">
			<span class="label">Price</span>
			<input-container>
				<input type="number"
					name="price"
					min="0"
					value=""
					required
				>
			</input-container>
		</label>

		<div class="button-container span-two">
			<button type="submit" name="submitted">Submit</button>
		</div>
				
	</form>
	
	<div id="form-result"></div>

</inner-column>

<script src="projects/exercises-for-programmers/simple-math/script.js"></script>

<?php include(getFile("site-footer.php"));?>