<div class="themeSelector">
	<p>Theme:</p>
	<div class="palettes">

		<?php
			$palettes = [30, 90, 150, 210, 270, 330];
			$class = "";

			foreach ($palettes as $palette) {
				if (intval($activeHue) === $palette) { // $activeHue is in the head, pulling from $_COOKIE["themeCode"]
					$class = "active";
				} else {
					$class = "";
				}
			?>
				<button data-hue="<?=$palette?>" class="color <?=$class?>"></button>				
		<?php	}

		?>

	</div>
</div>
<script src="modules/theme-selector/controller.js" type="module"></script>