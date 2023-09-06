<div class="see-it-now-container">
	
	<text-content>
		<?php include(getFile('components/icon-placeholder/template.php'));?>
		
		<p class="eyebrow">Rhoncus, accumsan dictum</p>
		
		<h2 class="xl-voice">Etiam nulla lfulputate.</h2>
		
		<p>Neque, pulvinar vestibulum non aliquam.</p>
	
		<a href="">
			<p>Learn More</p>
			<?php include(getFile('components/icon-placeholder/template.php'));?>
		</a>
	</text-content>

	<picture><img src="https://peprojects.dev/images/landscape.jpg" alt=""></picture>

	<div class="grid-list">
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
		
		<a href="">
			<p>See All</p>
			<?php include(getFile('components/icon-placeholder/template.php'));?>
		</a>
	</div>

</div>