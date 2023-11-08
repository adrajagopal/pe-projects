<div class="client-testimony-container">
	<text-content>
		<h2><?=$section['content']['heading']?></h2>
		<p class="medium-voice"><?=$section['content']['description']?></p>	
	</text-content>
	
	<?php if ($page === "blue") { ?>
			<picture><img src="https://peprojects.dev/images/landscape.jpg" alt=""></picture>
	<?php } ?>
	
	<ul
		class="main-carousel"
		<?php if ($page === "home" OR $page === "wavy") {
			echo "data-flickity='{ \"cellAlign\": \"left\", \"contain\": true, \"wrapAround\": true }'";
		} elseif ($page === "blue") {
			echo "data-flickity='{ \"cellAlign\": \"left\", \"contain\": true, \"wrapAround\": true, \"prevNextButtons\": false, \"setGallerySize\": \"false\" }'";
		}?>
	>
		<?php
			$json = file_get_contents(getFile('data/ratings.json'));
	
			$quotes = json_decode($json, true);
	
			foreach ($quotes as $quote) { ?>
	
				<li class="carousel-cell">
					<?php include(getFile('modules/quote-card/template.php'));?>
				</li>
	
		<?php } ?>
	</ul>
	
</div>