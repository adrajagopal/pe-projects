<h3 class="large-voice">Boomerang Fu Characters</h3>

<p class="medium-voice"><a href="http://www.boomerangfu.com/" target="_blank">Boomerang Fu</a> is a multiplayer game where all players run around slashing each other with boomerangs, each one hoping to be the last food avatar standing. Here are some of my favorites: </p>


<?php
	$avocado = ["name" => "Avocado", "description" => "Pure joy", "portrait" => "graphics/images/bf-avocado.jpg"];
	$banana = ["name" => "Banana", "description" => "Ambivalence", "portrait" => "graphics/images/bf-banana.jpg"];
	$eggplant = ["name" => "Eggplant", "description" => "Innate sadness", "portrait" => "graphics/images/bf-eggplant.jpg"];
	$milk = ["name" => "Milk", "description" => "Sure, milk", "portrait" => "graphics/images/bf-milk.jpg"];
	$watermelon = ["name" => "Watermelon", "description" => "Devious melon", "portrait" => "graphics/images/bf-watermelon.jpg"];
	$me = ["name" => "Me", "description" => "This one is just me.", "portrait" => "graphics/images/bf-me.jpg"];

	$boomerangFuCharacters = [$avocado, $banana, $eggplant, $milk, $watermelon, $me];

	?>

<ul class="boomerang-fu gallery">
	<?php
		foreach ($boomerangFuCharacters as $bfCharacter) { 
			$name = $bfCharacter["name"];
			$description = $bfCharacter["description"];
			$portrait = $bfCharacter["portrait"];	
	?>
		
	<li class="boomerang-fu gallery-item">
		<picture><img src="<?=$portrait?>" alt=""></picture>
		<p class="medium-voice"><?=$description?></p>
	</li>			
	<?php } ?>
</ul>