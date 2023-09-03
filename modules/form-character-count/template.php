<form method="POST">
		
	<div class="field-section">

		<h2 class="large-voice form-title">Count your characters.</h2>

		<label class="field text">
			<span class="label">Your string</span>
			<input-container>
				<textarea type="text" name="string" placeholder="Type or paste in here..."><?=$string?></textarea>
			</input-container>
		</label>
	</div>
	

	<div class="button-container span-two">
	
		<button type="submit" name="submitted">
			Count
		</button>

		<p class="<?=$class?>"><?=$message?></p>
	</div>

</form>