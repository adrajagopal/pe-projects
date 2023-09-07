<div class="see-it-now-container">

	<?php 
		if ($page === "wavy") { ?>
			<picture><img src="images/upload-cloud.svg" alt=""></picture>
		<?php } ?>
	<text-content>
		
		<p class="pre-heading"><?=$section['content']['pre-heading']?></p>
		
		<h2 class="xl-voice"><?=$section['content']['heading']?></h2>
		
		<p class="small-voice"><?=$section['content']['description']?></p>
		
	</text-content>

	<?php
		if (count( $section['content']['modules'] ) > 0 ) { //if there's at least one module

			foreach ($section['content']['modules'] as $module) { //loop through the template card
				include(getFile("modules/$module[type]/template.php"));
			} 
		}

	?>

	<?php foreach ($section['content']['actions'] as $action) {
		include(getFile("components/$action[type]/template.php"));
	} ?>

</div>