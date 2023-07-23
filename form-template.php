<?php include("header.php");?>

<h1 class="content-header xl-voice">Form Title</h1>

<h2 class="content-header large-voice">Form description</h2>

<p class="medium-voice">Form instructions</p>

<form>
	<fieldset class="field short-text">
		<legend>Short text question</legend>
		<input type="text">
		<p class="warning">warning</p>
	</fieldset>
	
	<fieldset class="field long-text">
		<legend>Long text question</legend>
		<textarea name="" id="" cols="30" rows="10"></textarea>
		<p class="warning">warning</p>
	</fieldset>
	
	<fieldset class="field short-text">
		<legend>Multiple attribute short text</legend>
		<div class="label-input-group">
			<label for="">Attr1</label>
			<input type="text">
			<p class="warning">warning</p>
		</div>
		<div class="label-input-group">
			<label for="">Attr2</label>
			<input type="text">
			<p class="warning">warning</p>
		</div>
		<div class="label-input-group">
			<label for="">Attr3</label>
			<input type="text">
			<p class="warning">warning</p>
		</div>
		<div class="label-input-group">
			<label for="">Attr4</label>
			<input type="text">
			<p class="warning">warning</p>
		</div>
	</fieldset>
	
	<fieldset class="field radio">
		<legend>Multiple choice</legend>
		<div class="label-input-group">
			<input type="radio">
			<label for="">Attr1</label>
		</div>
		<div class="label-input-group">
			<input type="radio">
			<label for="">Attr2</label>
		</div>
		<div class="label-input-group">
			<input type="radio">
			<label for="">Attr3</label>
		</div>
		<div class="label-input-group">
			<input type="radio">
			<label for="">Attr4</label>
		</div>
		<p class="warning">warning</p>
	</fieldset>
	
	<fieldset class="field buttons">
		<legend>Button options</legend>
		<div class="label-input-group">
			<input type="button" value="Attr1">
		</div>
		<div class="label-input-group">
			<input type="button" value="Attr1">
		</div>
		<div class="label-input-group">
			<input type="button" value="Attr1">
		</div>
		<div class="label-input-group">
			<input type="button" value="Attr1">
		</div>
		<p class="warning">warning</p>
	</fieldset>
	
	<fieldset class="field slider">
		<legend>Range slider</legend>
		<div class="label-input-group">
			<input type="range" min="0" max="40" step="5">
			<label for="">0-40, incr = 5</label>
		</div>
		<p class="warning">warning</p>
	</fieldset>
	
	<div class="submit-container">
		<button type="submit" name="submitted">Submit</button>
		<p class="warning">warning</p>
	</div>
	
	<p class="success">success message</p>
	
</form>

<p class="form-output">Here's your output.</p>


<?php include("footer.php")?>