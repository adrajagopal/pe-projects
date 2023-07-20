<?php include("../header.php");?>

<?php

$string = '';
$characters = 0;

$formResult = $_POST;

if (isset($_POST["submitted"])) {

	$string = $_POST["string"];

	$characters = strlen($string);

	if (isset($string) and $characters > 0) {
		echo "Your input, \"" . $string . "\" is " . $characters . " characters long.";
	}

	else {
		echo "Please enter a string of at least 1 character.";
	}
}

?>

<style>
	form {
		margin-top: 10px;
		border: 2px solid var(--splash-primary);
	}

	form > * {
		margin-top: 10px;
	}

	label, input {
		display: block;
	}

	button {
		background-image: linear-gradient(45deg, var(--splash-primary) 30%, var(--paper), var(--paper-light));
		color: var(--ink-dark);
		border: none;
		border-radius: 0.5rem;
		padding: 0.5rem 1rem;
		font-family: var(--primary-font);
		font-size: 1.25rem;
		font-weight: 600;
	}

	button:hover {
		background-image: none;
		background-color: var(--paper);
	}

	button:active {
		background-image: none;
		background-color: var(--splash-primary);
		}



</style>


<h1 class="hero-title xl-voice">Character counts.</h1>

<form method="POST">

	<h2 class="content-header large-voice">Count your characters.</h2>	

	<div class="field">
		<label class="medium-voice">Your string</label>
		<input type="text" name="string" value="<?=$string?>" placeholder="Type or paste in here...">
	</div>
	
	<button type="submit" name="submitted">
		Count
	</button>


</form>


<?php include("../footer.php")?>