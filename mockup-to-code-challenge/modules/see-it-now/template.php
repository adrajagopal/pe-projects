<div class="see-it-now-container">

	<?php 
		if ($page === "wavy") { ?>
			<picture><img src="images/upload-cloud.svg" alt=""></picture>
		<?php } ?>
	<text-content>
		
		<p class="pre-heading"><?=$section['content']['pre-heading']?></p>
		
		<h2 class="xl-voice"><?=$section['content']['heading']?></h2>

		<?php if (isset($section['content']['description'])) { ?>
		
			<p class="small-voice"><?=$section['content']['description']?></p>

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