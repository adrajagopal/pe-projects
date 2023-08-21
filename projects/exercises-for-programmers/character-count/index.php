<?php include("../../../header.php");?>

<?php

$string = '';
$characters = 0;
$message = "Please enter a string of at least 1 character.";
$class= "warning";

$formResult = $_POST;

if (isset($_POST["submitted"])) {

	$string = $_POST["string"];

	$characters = strlen($string);

	if (isset($string) and $characters > 0) { 
		$message = "Your input, '$string' is $characters characters long.";
		$class = "medium-voice";
	}
}
?>

<section class="form-body">
	<div class="inner-column">
		<h1 class="xl-voice">Character counts.</h1>
		
		<form method="POST">
		
			<div class="field-section">
		
				<h2 class="large-voice form-title">Count your characters.</h2>	
		
				<div class form-title="field">
					<label>Your string</label>
					<textarea type="text" name="string" placeholder="Type or paste in here..."><?=$string?></textarea>
				</div>
			</div>
		
			<div class="response-section">
			
				<button type="submit" name="submitted">
					Count
				</button>
		
				<p class="<?=$class?>"><?=$message?></p>
		
			</div>
		
		</form>
	</div>
</section>


<?php include("../../../site-footer.php")?>