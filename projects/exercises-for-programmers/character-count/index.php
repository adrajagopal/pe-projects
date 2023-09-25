<?php include("../../../header.php");?>

<?php

$string = '';
$characters = 0;
$message = "";
$class= "";

$formResult = $_POST;

if (isset($_POST["submitted"])) {

	$string = $_POST["string"];

	$characters = strlen($string);

	$words = str_word_count($string);

	// throw warning first if nothing submitted
	$message = "Please complain about something before hitting submit.";
	$class= "warning";

	if (isset($string) and $characters > 0) { 
		$class = "form-result";

		if ($words < 5) {
			$message = "Thanks! This is actually just a word counter. But you didn't have much to gripe about anyway.";			
		} elseif ($words >= 5) {
		$message = "Thanks! This is actually just a word counter. Your complaint was $words words long. Does that help?";
		}
	}
}

?>

<section class="form-intro">
	<inner-column>
		
		<h1 class="xl-voice">Submit a complaint</h1>
		<a href="projects/exercises-for-programmers/character-count?">Clear form</a>
	</inner-column>
</section>

<section class="form-character-count">
	<inner-column>
		<?php include(getFile('modules/form-character-count/template.php')); ?>
	</inner-column>
</section>

<?php include("../../../site-footer.php")?>