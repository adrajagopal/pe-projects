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
		$class = "form-result";
	}
}
?>

<section class="form-intro">
	<inner-column>
		<h1 class="xl-voice">Character counter</h1>
	</inner-column>
</section>

<section class="form-character-count">
	<inner-column>
		<?php include(getFile('modules/form-character-count/template.php')); ?>
	</inner-column>
</section>




<?php include("../../../site-footer.php")?>