<?php
	include('../head.php');
	include('../header.php');
?>

<head>
	<style>
		.dog-portrait {
		max-width: 400px;
		height: auto;
		border: 2px solid var(--splash-primary);
		}	

		.dog-about-section {
			display: flex;
			flex-direction: column;
			gap: 10px;
		}

		.dog-box {
			padding: 20px;
			border: 2px solid var(--paper);
			border-radius: 1rem;
		} 

		@media (min-width: 550px) {
			.dog-about-section {
				flex-direction: row;
				flex-wrap: wrap;
			}

			.dog-box {
				max-width: 40%;
			}
		}

		@media (min-width: 800px) {
			.dog-about-section {
				flex-wrap: none;
			}

			.dog-box {
				max-width: 30%;
			}
		}
	</style>
</head>

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
		"portrait" => "php-loops/images/buddha.jpg",
		"bio" => "Buddha might technically be a chiweenie, but really he's a silver fox. In his golden years, he likes to sit in the sun and watch the wind blow. He loves people, coexists peacefully with most dogs, and loves cats in an often unreciprocated manner. He has a healthy love for chicken and fish, and will love you forever if you have long nails and a heating pad."
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
		"portrait" => "php-loops/images/minnie.jpg",
		"bio" => "Minnie is a terror and a joy. She can be skittish around new people, places, sounds, animals, and environments. But once she's comfortable in her surroundings, she is a joy to have around. She loves long walks, treeing squirrels, wrestling and playing rough with you and other dogs, and is obsessed with peanut butter. Minnie's cutest trait is that she sighs and grumbles in her sleep - very loudly."
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
		"portrait" => "php-loops/images/chubs.jpg",
		"bio" => "Chubs was a pure lover. He loved all people and was a jealous attention hog. He loved playing with bouncy balls and howling at postal workers and delivery trucks. He could recognize the sound of the UPS truck engine and squealing brakes from a half-block away, so we always knew when a package was coming - for anyone in our neighborhood. He had a tough last year of his life, but was still happy until the last day."
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