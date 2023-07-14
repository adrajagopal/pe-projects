<?php
	include('../head.php');
	include('../header.php');
	include("dog-arrays.php");
?>

<h1 class="xxl-voice hero-title">I have <?php echo count($myDogs);?> dogs.</h1>

<h2 class="xl-voice content-header">It's nice to meet them:</h2>

<div class="dog-about-section">
	<?php

		foreach ($myDogs as$dog) {
			echo
				"<div class='dog-box'>" .
				"<h3 class='xl-voice content-header'>" . $dog["name"] . "</h3>"
				. "<picture class='dog-portrait'><img src=" . $dog["portrait"] . "></picture>"
				. "<ul class='medium-voice content-body'>"
				. "<li>" . "Age: " . $dog["age"] . "</li>"
				. "<li>" . "Sex: " . $dog["sex"] . "</li>"
				. "<li>" . "Breed: " . $dog["breed"] . "</li>"
				. "</ul>"
				. "<p class='medium-voice content-body'>" . $dog["bio"] . "</p>"
				. "</div>"
				;
		}


	?>
</div>

















<?php
	include('../footer.php');
?>