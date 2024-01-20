<div class="themeSelector">
	<h2 class="medium-voice" aria-label="Select a theme color">Theme:</h2>
	<form class="palettes">

		<?php
			$palettes = [
				['hue' => 30, 'name' => 'marigold'],
				['hue' => 90, 'name' => 'lime'],
				['hue' => 150, 'name' => 'spring green'],
				['hue' => 210, 'name' => 'sky blue'],
				['hue' => 270, 'name' => 'violet'],
				['hue' => 330, 'name' => 'rose']
			];
			
			$class = "";

			foreach ($palettes as $palette) {
				if (intval($activeHue) === $palette['hue']) { // $activeHue is in the head, pulling from $_COOKIE["themeCode"]
					$class = "active";
				} else {
					$class = "";
				}
			?>
				<div data-hue="<?=$palette['hue']?>" class="colorSwatch color <?=$class?>">
					<input data-hue="<?=$palette['hue']?>" type="radio" name="hue" aria-label="<?=$palette['name']?> theme">	
				</div>
		<?php	}

		?>

	</form>
</div>
<script src="modules/theme-selector/controller.js" type="module"></script>