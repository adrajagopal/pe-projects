<?php
	include("header.php");
	include("trail-database.php");
?>

<div class="inner-column">
	<h1 class="xxl-voice">Trails</h1>

	<p>Next up for this page - set up a trail gallery</p>

	<p>After that, create details page with querystring routing</p>
</div>


<section class="inner-column">
	<h2 class="xl-voice">Find your next hike.</h2>

	<div class="gallery inner-column">

		<?php foreach ($trails as $trail) { ?>

			<div class="gallery-card">
				<a href="trail.php?id=<?=$trail["id"]?>" class="clickable-pic">
					<picture><img src="<?=$trail["portrait"]?>" alt=""></picture>
				</a>
				<div class="gallery-card-text">
					<p class="large-voice"><?=$trail["name"]?></p>
					<p class="medium-voice"><?=$trail["description"]?></p>
					<a href="trail.php?id=<?=$trail["id"]?>" class="medium-voice">Get more info</a>
				</div>
			</div>

		<?php } ?>

	</div>

</section>

<?php include("footer.php");?>