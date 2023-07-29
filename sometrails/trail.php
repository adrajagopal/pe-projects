<?php
	include("header.php");
	include("trail-database.php");

	$id = $_GET['id'];
?>

<!-- Add logic that hides the card and shows some copy if there's no trail id in the url -->

<nav><a href="trail-gallery.php"><-- Back to trail gallery</a></nav>

<!--
	1. Get the trail id from the url
	2. Use that to look up the array
	3. Display trail details per array
		-portrait
		-name
		-city
		-details:
			-type
			-length
			-dog-friendly
		-description
		-activities
-->

<section class="inner-column">

	<picture><img src="images/sometrails-icon.jpg" alt=""></picture>

	<h1 class="xl-voice">trail name <?=$id?></h1>

	<h2 class="large-voice">city name</h2>

	<ul class="medium-voice">
		<li>Type: XX</li>
		<li>Length: XX</li>
		<li>Dog-friendly: XX</li>
	</ul>

	<p class="medium-voice">Trail description alsdkfa fasdlka asdf;alsd. asldfkas asd.fasd asdfasld.as dfasd.fa sdas.kjalfj woeijowe  iewqpqpqf!</p>

	<div class="activity-box">
		<ul class="activities medium-voice">
			<?php /* foreach (condition)*/ { ?>
				<li></li>
			<?php } ?>

		</ul>
	</div>




</section>






<?php include("footer.php");?>