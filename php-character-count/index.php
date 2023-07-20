<?php include("../header.php");?>

<?php

$characters = 0;



?>
	button {
		background-image: linear-gradient(45deg, var(--splash-primary) 30%, var(--paper), var(--paper-light));
		border: none;
		border-radius: 0.5rem;
		padding: 0.5rem 1rem;
		font-family: var(--primary-font);
		font-size: 1.25rem;
		font-weight: 600;
	}




<h1 class="hero-title xl-voice">Character counts.</h1>

<form action="">

	<h2 class="content-header large-voice">Count your characters.</h2>	

	<div class="field">
		<label class="medium-voice" for="">Your string</label>
		<input type="text" name="string" placeholder="Type or paste in..." value="<?=$characters?>">
	</div>
	
	<button type="submit">Count</button>


</form>


<?php include("../footer.php")?>