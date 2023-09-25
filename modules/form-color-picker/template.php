
<div class="color-picker-container">

	<div class="color-swatch"></div>

	<form class="colorPicker">

		<label class="field slider span-two">
			<span class="label">Hue</span>
			<input-container>
				<input id="hue" type="range" min="0" max="360" step="10">
				<label for="hue">0-360, incr = 10</label>
			</input-container>
		</label>

		<label class="field slider span-two">
			<span class="label">Saturation</span>
			<input-container>
				<input id="saturation" type="range" min="0" max="100" step="1">
				<label for="saturation">0-100, incr = 1</label>
			</input-container>
		</label>

		<label class="field slider span-two">
			<span class="label">Lightness</span>
			<input-container>
				<input id="lightness" type="range" min="0" max="100" step="1">
				<label for="lightness">0-100, incr = 1</label>
			</input-container>
		</label>

	</form>

</div>