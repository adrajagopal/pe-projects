<div class="see-it-now-container">

	<?php 
		if ($page === "wavy") {
			include(getFile('images/upload-cloud.svg'));
		} ?>
	<text-content>
		
		<p class="preheading"><?=$section['content']['preheading']?></p>
		
		<h2 class="xl-voice"><?=$section['content']['heading']?></h2>

		<?php if (isset($section['content']['description'])) { ?>
		
			<p class="medium-voice"><?=$section['content']['description']?></p>

		<?php }	?>
		
	</text-content>

	<?php 
		if (isset($section['content']['video'])) {
			if ($section['content']['video'] === "embed") {
				include(getFile('components/video-player/template.php'));
			} elseif ($section['content']['video'] === "external-link") {
				foreach ($section['content']['actions'] as $action) {
					include(getFile("components/$action[type]/template.php"));
				} 
			}
		}
	?>

</div>