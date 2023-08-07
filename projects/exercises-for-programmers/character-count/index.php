<?php include("../../../header.php");?>

<?php

$string = '';
$characters = 0;

$formResult = $_POST;

?>

<h1 class="xl-voice">Character counts.</h1>

<form method="POST">

	<div class="field-section">

		<h2 class="large-voice form-title">Count your characters.</h2>	

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

					<p class="medium-voice feedback">Your input, "<?=$string?>" is <?=$characters?> characters long.</p>
				<?php }

				else { ?>
					<p class="medium-voice warning">Please enter a string of at least 1 character.</p>
				<?php }
			}
		?>
	</div>

</form>


<?php include("../../../footer.php")?>