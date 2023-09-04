<form method="POST">

	<h2 class="large-voice span-two">Count your characters.</h2>

	<label class="field text span-two">
		<span class="label">Your string</span>
		<input-container>
			<textarea class="span-two" type="text" name="string" rows="6" placeholder="Type or paste in here..."><?=$string?></textarea>
		</input-container>
	</label>

	<div class="button-container span-two">
	
		<button type="submit" name="submitted">
			Count
		</button>

		<p class="<?=$class?>"><?=$message?></p>
	</div>

</form>