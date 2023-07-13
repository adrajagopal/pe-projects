<?php
	include('../head.php');
	include('../header.php');
?>

<?php
	$buddha = [
		"id" => "1",
		"name" => "Buddha",
		"birthday" => "2011/10/04",
		"sex" => "male",
		"breed" => "chiweenie mix",
		"favFood" => "chicken",
		"age" => "12",
		"coatType" => "wire",
		"isAsshole" => "yes",
		"portrait" => "php-loops/images/buddha.jpg"
	];

	$minnie = [
		"id" => "2",
		"name" => "Minnie",
		"birthday" => "2021/01/03",
		"sex" => "female",
		"breed" => "hound mix",
		"favFood" => "peanut butter",
		"age" => "2",
		"coatType" => "straight",
		"isAsshole" => "no",
		"portrait" => "php-loops/images/minnie.jpg"
	];

	$chubs = [
		"id" => "3",
		"name" => "Chubs",
		"birthday" => "2012/09/01",
		"sex" => "male",
		"breed" => "Boglen Terrier",
		"favFood" => "rabbit",
		"age" => "10",
		"coatType" => "straight",
		"isAsshole" => "no",
		"portrait" => "php-loops/images/chubs.jpg"
	];

	$myDogs = [$buddha, $chubs, $minnie];

?>


<h1 class="xxl-voice hero-title">I have <?php echo count($myDogs);?> dogs.</h1>

<h2 class="xl-voice content-header">It's nice to meet them:</h2>

<div class="dog-about-section">
	<?php

		foreach ($myDogs as$dog) {
			echo
				"<div class='dog-box'>" .
				"<h3 class='large-voice content-header'>" . $dog["name"] . "</h3>"
				. "<picture class='dog-portrait'><img src=" . $dog["portrait"] . "></picture>"
				. "<ul class='medium-voice content-subheader'>"
				. "<li>" . "Age: " . $dog["age"] . "</li>"
				. "<li>" . "Sex: " . $dog["sex"] . "</li>"
				. "<li>" . "Breed: " . $dog["breed"] . "</li>"
				. "</ul>"
				. "</div>"
				;
		}


	?>
</div>

















<?php
	include('../footer.php');
?>