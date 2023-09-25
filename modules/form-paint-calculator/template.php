<form method="POST" class="paint-calculator">


	<span class="label span-two">Length</span>

	<label class="field text span-one">
		<input-container>
			<input type="number"
				name="lengthFeet"
				min="0"
				step="1"
				value="<?=$lengthFeet?>"
				required
			>
			<span class="append">feet</span>
		</input-container>
	</label>

	<label class="field text span-one">
		<input-container>
			<input type="number"
				name="lengthInches"
				min="0"
				max="12"
				step="1"
				value="<?=$lengthInches?>"
				required
			>
			<span class="append">inches</span>
		</input-container>
	</label>


	<span class="label span-two">Width</span>

	<label class="field text span-one">
		<input-container>
			<input type="number"
				name="widthFeet"
				min="0"
				value="<?=$widthFeet?>"
				required
			>
			<span class="append">feet</span>
		</input-container>
	</label>

	<label class="field text span-one">
		<input-container>
			<input type="number"
				name="widthInches"
				min="0"
				max="12"
				value="<?=$widthInches?>"
				required
			>
			<span class="append">inches</span>
		</input-container>
	</label>

	<p class="<?=$class?> span-two"><?=$message?></p>

	<div class="actions span-two">
		<div class="button-container">
			<button type="submit" name="submitted">Calculate</button>
		</div>
		
		<label class="field checkbox">
			<input-container>
				<checkbox-container>
					<input type="checkbox" name="colorPickerToggle">
					<span class="label">Help me select a paint color</span>
				</checkbox-container>
			</input-container>
		</label>
	</div>

</form>