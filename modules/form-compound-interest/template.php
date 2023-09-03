<form method="POST" class="compound-interest">
	
	<label class="field text">
		<span class="label">Principal amount</span>
		<input-container>
			<span class="prepend">$</span>
			<input class="short-text"
				type="number"
				name="principal"
				min="0.01"
				step = "0.01"
				required="required"
				value="<?=$principal?>"
			>
		</input-container>
	</label>

	<label class="field text">
		<span class="label">Interest rate</span>
		<input-container>
			<input class="short-text"
				type="number"
				name="rate"
				min="0.25"
				max = "100"
				step = "0.25"
				required="required"
				value="<?=$rate?>"
			>
			<span class="append">%</span>
		</input-container>
	</label>

	<label class="field dropdown span-two">
		<span class="label">Compounding Frequency</span>
		<select id="freq" name="compoundFreq" required>
			<option disabled="true">Select a compounding frequency</option>
			<option value="1">Annual</option>
			<option value="2">Semi-annual</option>
			<option value="4">Quarterly</option>
			<option value="12">Monthly</option>
			<option value="52">Weekly</option>
			<option value="365">Daily</option>
		</select>
	</label>

	<label class="field text">
		<span class="label">Term</span>
		<input-container>
			<input type="number" class="short-text"
				name="years"
				min="0.5"
				step = "0.5"
				required="required"
				value="<?=$years?>"
			>
			<span class="append">years</span>
		</input-container>
	</label>

	<div class="button-container span-two">
		<button type="submit" name="submitted">Calculate</button>

		<p class="<?=$display?>"><?=$amountFormatted?></p>
	</div>

</form>