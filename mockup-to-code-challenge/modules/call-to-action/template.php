<div class="call-to-action-container">
	<text-content>

		<?php if(isset($section['content']['preheading'])) { ?>
			<p class="preheading small-voice"><?=$section['content']['preheading']?></p>
		<?php } ?>
		
		<h2 class="xl-voice"><?=$section['content']['heading']?></p>
		
		<?php if(isset($section['content']['description'])) { ?>
			<p class=""><?=$section['content']['description']?></p>
		<?php } ?>

	</text-content>

	<div class="links-container">
		<?php foreach ($section['content']['actions'] as $action) {
			include(getFile("components/$action[type]/template.php"));
		} ?>
	</div>

	<?php if($page === "blue") { ?>
		<picture><img src="https://peprojects.dev/images/square.jpg" alt=""></picture>
	<?php } ?>
</div>