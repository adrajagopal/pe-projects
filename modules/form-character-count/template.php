<form method="POST">

	<!-- <h2 class="large-voice span-two">Enter y</h2> -->

	<label class="field text span-two">
		<span class="label">Please describe your issue:</span>
		<input-container>
			<textarea class="span-two" type="text" name="string" rows="6" placeholder="Type or paste in here..."><?=$string?></textarea>
		</input-container>
	</label>

	<div class="button-container span-two">
	
		<button type="submit" name="submitted">
			Submit complaint
		</button>
		<p class="<?=$class?>"><?=$message?></p>
	</div>

</form>

<script src="modules/form-character-count/script.js"></script>