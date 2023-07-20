<?php include("../header.php");?>

<?php

$string = '';
$characters = 0;

$formResult = $_POST;

?>

<style>
	form {
		margin-top: 10px;
		padding: 10px;
		border: 1px solid var(--paper);
		border-radius: 0.5em;
		width: 100%;
		min-height: 300px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	h2.form-title {
		margin-top: 5px;
		font-weight: 600;
	}
	label {
		font-family: var(--primary-font);
		font-size: 1.25rem;
		font-weight: 600;
		color: var(--paper);
		margin-top: 20px;
	}

	label, textarea {
		display: block;
	}

	textarea {
		margin-top: 10px;
		width: 100%;
		max-width: 500px;
		height: 5rem;
		font-family: var(--secondary-font);
		font-size: 1rem;
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
		margin-top: 20px;
	}

	button:hover {
		background-image: none;
		background-color: var(--paper);
	}

	button:active {
		background-image: none;
		background-color: var(--splash-primary);
		}

	.feedback {
		margin-top: 20px;
		border-top: 2px solid var(--paper);
	}

	.warning {
		margin-top: 20px;
		border-top: 2px solid #FF9D8A;
		color: #FF9D8A;
	}
</style>


<h1 class="hero-title xl-voice">Character counts.</h1>

<form method="POST">

	<div class="field-section">

		<h2 class="content-header large-voice form-title">Count your characters.</h2>	

		<div class form-title="field">
			<label>Your string</label>
			<textarea type="text" name="string" value="<?=$string?>" placeholder="Type or paste in here..."></textarea>
		</div>
	</div>

	<div class="response-section">
	
		<button type="submit" name="submitted">
			Count
		</button>


		<?php 
			if (isset($_POST["submitted"])) {

				$string = $_POST["string"];

				$characters = strlen($string);

				if (isset($string) and $characters > 0) { ?>

					<p class="medium-voice content-body feedback">Your input, "<?=$string?>" is <?=$characters?> characters long.</p>
				<?php }

				else { ?>
					<p class="medium-voice content-body warning">Please enter a string of at least 1 character.</p>
				<?php }
			}
		?>
	</div>

</form>


<?php include("../footer.php")?>