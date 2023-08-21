<h3 class="large-voice">Random stuff</h3>

<p class="medium-voice">A little bit of everything, from class assignments to personal projects.</p>

<?php
	$chubsBlend = ["name" => "Chubs Blend", "description" => "My dog, Chubs - messing around with mix blend modes", "portrait" => "graphics/images/chubs-blend-mode.jpg"];
	$dazzle = ["name" => "Dazzle", "description" => "The exercise was secret word, but with symbolic representations. My word was dazzle - which no one guessed correctly. I was going for a disco ball, but most people thought it was an explosion.", "portrait" => "graphics/images/dazzle.jpg"];
	$miloDBZ = ["name" => "Milo DBZ", "description" => "A Dragon Ball Z-inspired graphic I made for a friend's newborn. If I had to do this again, I would focus on consistency of line quality.", "portrait" => "graphics/images/milo-dbz.jpg"];
	$hundred = ["name" => "100 days", "description" => "A graphic I made on my cohort's 100th day of class.", "portrait" => "graphics/images/pe-day-100.jpg"];

	$otherGraphics = [$chubsBlend, $miloDBZ, $dazzle, $hundred];

	?>

<ul class="other-graphics gallery">
	<?php
		foreach ($otherGraphics as $otherGraphic) { 
			$name = $otherGraphic["name"];
			$description = $otherGraphic["description"];
			$portrait = $otherGraphic["portrait"];	
	?>
		
	<li class="other-graphics gallery-item">
		<picture><img src="<?=$portrait?>" alt=""></picture>
		<p class="medium-voice"><?=$description?></p>
	</li>			
	<?php } ?>
</ul>