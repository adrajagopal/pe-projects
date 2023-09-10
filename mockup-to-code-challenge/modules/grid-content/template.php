<div class="grid-content-container">
	
	<text-content>
		<?php if ($page === "blue") { ?>
			<p class="preheading small-voice">Rhoncus, accumsan dictum</p>	
		<?php } ?>
	
		<h2 class="xl-voice"><?=$section['content']['heading']?></h2>
		
		<p class="medium-voice"><?=$section['content']['heading']?></p>
	</text-content>

	<?php if ($page === "home") { ?>
		<picture><img src="https://peprojects.dev/images/square.jpg" alt=""></picture>
	<?php } ?>


		
	<div class="grid-list">
		<ul>
			<?php 
				$json = file_get_contents(getFile('data/grid-items.json'));
		
				$listItems = json_decode($json, true);
		
				foreach ($listItems as $item) { ?>
					<li class="grid-card">
						<?php include(getFile('modules/grid-card/template.php'));?>
					</li>
			<?php } ?>
		</ul>
</div>