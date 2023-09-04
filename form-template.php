<?php include("header.php");?>

<!-- 
Every choice has to have a label in a radio/checkbox field
Put a fieldset+legend around the group
Probably get rid of radio-container and checkbox-container
Fix styling the checkbox-pill:focus and ::selection
build out logic to retain form results on refresh
 -->

<inner-column>
	<h1 class="xl-voice">Form Title</h1>
	
	<h2 class="large-voice">Form description</h2>
	
	<p class="medium-voice">Form instructions</p>
	
	<form>
		<label class="field text span-two">
			<span class="label">Short text question</span>
			<input-container>
				<input type="text">
			</input-container>
			<span class="warning">warning</span>
		</label>

		<label class="field text span-one">
			<span class="label">Prepended number</span>
			<input-container>
				<span class="prepend">$</span>
				<input type="number">
			</input-container>
			<span class="warning">warning</span>
		</label>

		<label class="field text span-one">
			<span class="label">Appended number</span>
			<input-container>
				<input type="number">
				<span class="prepend">%</span>
			</input-container>
			<span class="warning">warning</span>
		</label>
		
		<label class="field text span-two">
			<span class="label">Long text question</span>
			<input-container>
				<textarea name="" id="" rows="5"></textarea>
			</input-container>
			<span class="warning">warning</span>
		</label>

		<label class="field dropdown span-two">
			<span class="label">Dropdown</span>
			<select id="freq" name="compoundFreq" required>
				<option disabled="true" selected>Select an option</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
				<option value="4">Four</option>
			</select>
		</label>

		<label class="field checkbox span-two">
			<span class="label">Checkbox multiselect</span>
			<span class="warning">warning</span>
			<input-container>
				<checkbox-container>
					<input type="checkbox" name="Attr1">
					<span class="label">Attr1</span>
				</checkbox-container>
				<checkbox-container>
					<input type="checkbox" name="Attr2">
					<span class="label">Attr2</span>
				</checkbox-container>
				<checkbox-container>
					<input type="checkbox" name="Attr3">
					<span class="label">Attr3</span>
				</checkbox-container>
				<checkbox-container>
					<input type="checkbox" name="Attr4">
					<span class="label">Attr4</span>
				</checkbox-container>
			</input-container>
		</label>


		<label class="field radio span-two">
			<span class="label">Multiple choice (select one only)</span>
			<span class="warning">warning</span>
			<input-container>
				<radio-container>
					<input type="radio" name="REPLACE">
					<span class="label">Attr1</span>
				</radio-container>
				<radio-container>
					<input type="radio" name="REPLACE">
					<span class="label">Attr2</span>
				</radio-container>
				<radio-container>
					<input type="radio" name="REPLACE">
					<span class="label">Attr3</span>
				</radio-container>
				<radio-container>
					<input type="radio" name="REPLACE">
					<span class="label">Attr4</span>
				</radio-container>
			</input-container>
		</label>

		<label class="field checkbox-pills span-two">
			<span class="label">Checkbox multiselect</span>
			<span class="warning">warning</span>
			<input-container>
				<label>
					<checkbox-container>
						<input type="checkbox" name="Attr1" class="visually-hidden">
						<span class="label">Attr1</span>
					</checkbox-container>
				</label>
			</input-container>
			<input-container>
				<label>
					<checkbox-container>
						<input type="checkbox" name="Attr2" class="visually-hidden">
						<span class="label">Attr2</span>
					</checkbox-container>
				</label>
			</input-container>
			<input-container>
				<label>
					<checkbox-container>
						<input type="checkbox" name="Attr3" class="visually-hidden">
						<span class="label">Attr3</span>
					</checkbox-container>
				</label>
			</input-container>
			<input-container>
				<label>
					<checkbox-container>
						<input type="checkbox" name="Attr4" class="visually-hidden">
						<span class="label">Attr4</span>
					</checkbox-container>
				</label>
			</input-container>
		</label>

		<!-- If you want to select multiple buttons, use this hack https://stackoverflow.com/questions/13630229/can-i-have-an-onclick-effect-in-css -->
				
		<label class="field slider span-two">
			<span class="label">Range slider</span>
			<span class="warning">warning</span>
			<input-container>
				<input type="range" min="0" max="40" step="5">
				<label for="">0-40, incr = 5</label>
			</input-container>
		</label>
		
		<div class="button-container span-two">
			<button type="submit" name="submitted">Submit</button>
			<span class="warning">warning</span>
		</div>
		
		<span class="success">success message</span>
		
	</form>
	
	<p class="form-result">Here's your output.</p>
</inner-column>
<?php include("site-footer.php")?>