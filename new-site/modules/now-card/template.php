<li class="now-card">
	
	<div class="heading-container">
		<h2 class="xl-voice"><?=$category ?? "Watching things"?></h2>
		<div class="colored-box"></div>
	</div>
	<ul role="list" class="bulleted-list">
		<?php 
			foreach ($items as $item) { ?>
				<li><?=$item?></li>
		<?php } ?>
	</ul>
</li>