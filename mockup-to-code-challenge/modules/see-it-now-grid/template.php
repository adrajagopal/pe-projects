<div class="see-it-now-grid">
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
</div>