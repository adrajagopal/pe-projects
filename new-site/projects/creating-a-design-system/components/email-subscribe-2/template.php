<form class="email-form-2 <?=$action['typeClass']?>">
	<div class="email-container"> <!--add another class to this to handle the input styling on the child -->
		<label>
			<span class="icon-container"><?php include('images/envelope.svg');?></span>
			<input type="text" placeholder="Email address">
		</label>
		<button class="btn-text">
			<?php
				include('components/button/template.php');
			?>
		</button>
	</div>
</form>

