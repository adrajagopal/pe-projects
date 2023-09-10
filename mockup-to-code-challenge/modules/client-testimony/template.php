<div class="client-testimony-container">
	<text-content>
		<h2 class="xl-voice"><?=$section['content']['heading']?></h2>
		<p class="medium-voice"><?=$section['content']['description']?></p>	
	</text-content>
	
	<?php if ($page === "blue") { ?>
			<picture><img src="https://peprojects.dev/images/landscape.jpg" alt=""></picture>
	<?php } ?>

	<carousel>
		<div class="carousel-arrow"><?php include(getFile('images/chevron-left.svg'));?></div>
		<ul>
			<?php
				$json = file_get_contents(getFile('data/ratings.json'));
		
				$quotes = json_decode($json, true);
		
				foreach ($quotes as $quote) { ?>
		
					<li>
						<?php include(getFile('modules/quote-card/template.php'));?>
					</li>
		
			<?php } ?>
		</ul>
		<div class="carousel-arrow"><?php include(getFile('images/chevron-right.svg'));?></div>
	</carousel>
	
</div>