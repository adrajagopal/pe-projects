<?php
	include("header.php");
	include("trail-database.php");
?>

<section class="page-header">
	<div class="inner-column">
		<h1 class="xxl-voice">Trails</h1>
	</div>
</section>


<section class="page-content">
	<div class="inner-column">
		<h2 class="xl-voice">Find your next hike.</h2>

		<ul class="gallery">

			<?php foreach ($trails as $trail) { ?>

				<li class="gallery-card">
					<a class="clickable-pic" href="trail.php?id=<?=$trail["id"]?>">
						<picture>
							<img src="<?=$trail["portrait"]?>" alt="">
						</picture>
					</a>
					<div class="gallery-card-text">
						<h3 class="large-voice"><?=$trail["name"]?></h3>
						<p class="medium-voice"><?=$trail["description"]?></p>
						<a class="medium-voice" href="trail.php?id=<?=$trail["id"]?>">Get more info</a>
					</div>
				</li>

			<?php } ?>

		</ul>
	</div>

</section>

<?php include("footer.php");?>