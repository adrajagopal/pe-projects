<?php $heading = $section['content']['heading'] ?? "Default heading"; ?>

<div class="hero-container">
	
	<text-content>
		<h1 class="xxl-voice"><?=$heading?></h1>
		<p><?=$section['content']['description']?></p>
	</text-content>
	<div class="links-container">
		<?php foreach ($section['content']['actions'] as $action) {
			include(getFile("components/$action[type]/template.php"));
		} ?>
	</div>

</div>