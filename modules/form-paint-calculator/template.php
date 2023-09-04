<form method="POST" class="paint-calculator">


	<span class="label span-two">Length</span>
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

	<span class="label span-two">Width</span>
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

	<p class="<?=$class?> span-two"><?=$message?></p>

	<div class="button-container span-two">
		<button type="submit" name="submitted">Calculate</button>
	</div>

</form>