<?php
	include('../head.php');
	include('../header.php');
	include("dog-arrays.php");
?>

<h1 class="xxl-voice hero-title">I have <?php echo count($myDogs);?> dogs.</h1>

<h2 class="xl-voice content-header">It's nice to meet them:</h2>

<ul class="dog-about-section">
	<?php

		foreach ($myDogs as $dog) {
			

				$id = $dog["id"];
				$name = $dog["name"];
				$birthday = $dog["birthday"];
				$sex = $dog["sex"];
				$breed = $dog["breed"];
				$favFood = $dog["favFood"];
				$age = $dog["age"];
				$coatType = $dog["coatType"];
				$isAsshole = $dog["isAsshole"];
				$portrait = $dog["portrait"];
				$bio = $dog["bio"];

			?>

			<li class="dog-card">
				<h3 class="xl-voice content-header"><?=$name?></h3>
				<picture class="dog-portrait"><img src="<?=$portrait?>"></picture>
				<ul class="medium-voice content-body">
					<li>Age: <?=$age?></li>
					<li>Sex: <?=$sex?></li>
					<li>Breed: <?=$breed?></li>
				</ul>
				<p class="medium-voice content-body"><?=$bio?></p>
			</li>

<?php	} ?>

</ul>






<?php
	include('../footer.php');
?>