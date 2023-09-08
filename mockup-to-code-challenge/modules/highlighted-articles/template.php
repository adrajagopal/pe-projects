<div class="highlighted-articles-container">

	<text-content>
		
		<p class="preheading"><?=$section['content']['preheading']?></p>
		
		<h2 class="xl-voice"><?=$section['content']['heading']?></h2>
		
	</text-content>

	<ul>
		<?php 
			$json = file_get_contents(getFile('data/grid-items.json'));
	
			$listItems = json_decode($json, true);

			for ($i = 0; $i <= 2; $i++) { ?>
				<li>
					<h3 class="large-voice"><?=$listItems[$i]['title']?></h3>
					<p><?=$listItems[$i]['description']?></p>
				</li>
		<?php } ?>
	</ul>

	<div class="links-container">
		<?php foreach ($section['content']['actions'] as $action) {
			include(getFile("components/$action[type]/template.php"));
		} ?>
	</div>
	
</div>