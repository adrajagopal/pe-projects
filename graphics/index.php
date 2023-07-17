<?php
	include("../header.php");
?>

<h1 class="hero-title xxl-voice">Graphics</h1>

<h2 class="content-header xl-voice">Working with graphics</h2>

<p class="content-body medium-voice">Working on graphics is a great way to learn about preparing images for display on websites and applications. I've been working with Affinity Designer. Among the things I can do with graphics software: make files smaller without losing quality, pick the right image type for the job (PNG, JPG, SVG), make GIFs, create SVGs and clean up the code, and create quick graphics mockups.</p>

<p class="content-body medium-voice">Don't call me a graphics expert, but I can scrap some nice-looking things together.</p>

<h2 class="content-header xl-voice">My creations</h2>

<h3 class="content-subheader large-voice">Boomerang Fu Characters</h3>

<p class="content-body medium-voice"><a href="http://www.boomerangfu.com/" target="_blank">Boomerang Fu</a> is a multiplayer game where all players run around slashing each other with boomerangs, each one hoping to be the last food avatar standing. Here are some of my favorites: </p>


<?php
	$avocado = ["name" => "Avocado", "description" => "Pure joy", "portrait" => "graphics/images/bf-avocado.jpg"];
	$banana = ["name" => "Banana", "description" => "Ambivalence", "portrait" => "graphics/images/bf-banana.jpg"];
	$eggplant = ["name" => "Eggplant", "description" => "Innate sadness", "portrait" => "graphics/images/bf-eggplant.jpg"];
	$milk = ["name" => "Milk", "description" => "Sure, milk", "portrait" => "graphics/images/bf-milk.jpg"];
	$watermelon = ["name" => "Watermelon", "description" => "Devious melon", "portrait" => "graphics/images/bf-watermelon.jpg"];
	$me = ["name" => "Me", "description" => "This one is just me.", "portrait" => "graphics/images/bf-me.jpg"];

	$boomerangFuCharacters = [$avocado, $banana, $eggplant, $milk, $watermelon, $me];

	?>


<!-- BoomerangFu gallery -->
<ul class="fu-gallery">
	<?php
		foreach ($boomerangFuCharacters as $bfCharacter) { 
			$name = $bfCharacter["name"];
			$description = $bfCharacter["description"];
			$portrait = $bfCharacter["portrait"];	
	?>
		
	<li class="fu-gallery-item">
		<picture><img src="<?=$portrait?>" alt=""></picture>
		<p class="content-body medium-voice"><?=$description?></p>
	</li>			
	<?php } ?>
</ul>

<!-- Miscellaneous gallery -->
<h3 class="content-subheader large-voice">Random stuff</h3>

<p class="content-body medium-voice">A little bit of everything, from class assignments to personal projects.</p>

<?php
	$chubsBlend = ["name" => "Chubs Blend", "description" => "My dog, Chubs", "portrait" => "graphics/images/chubs-blend-mode.jpg"];
	$dazzle = ["name" => "Dazzle", "description" => "An exercise in symbolism. The word is dazzle, and no one in my class was able to figure it out. Blame the designer...", "portrait" => "graphics/images/dazzle.jpg"];
	$miloDBZ = ["name" => "Milo DBZ", "description" => "A Dragon Ball Z-inspired graphic I made for a friend's newborn", "portrait" => "graphics/images/milo-dbz.jpg"];
	$hundred = ["name" => "100 days", "description" => "A graphic I made on my cohort's 100th day of 'bootcamp'.", "portrait" => "graphics/images/pe-day-100.jpg"];

	$randomGraphics = [$chubsBlend, $miloDBZ, $dazzle, $hundred];

	?>

<ul class="random-gallery">
	<?php
		foreach ($randomGraphics as $randomGraphic) { 
			$name = $randomGraphic["name"];
			$description = $randomGraphic["description"];
			$portrait = $randomGraphic["portrait"];	
	?>
		
	<li class="random-gallery-item">
		<picture><img src="<?=$portrait?>" alt=""></picture>
		<p class="content-body medium-voice"><?=$description?></p>
	</li>			
	<?php } ?>
</ul>




<?php
	include('../footer.php');
?>