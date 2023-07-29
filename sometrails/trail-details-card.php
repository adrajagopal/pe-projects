<picture><img src="<?=$trail['portrait']?>" alt=""></picture>

<h1 class="xl-voice"><?=$trail['name']?></h1>

<h2 class="large-voice"><?=$trail['city']?></h2>

<ul class="medium-voice">
	<li>Type: <?=$trail['type']?></li>
	<li>Length: <?=$trail['length']?></li>
	<li>Dog-friendly: <?=$trail['dog-friendly']?></li>
</ul>

<p class="medium-voice"><?=$trail['description']?></p>

<div class="activity-box">
	<ul class="activities medium-voice">
		<?php foreach ($trail['activities'] as $trail_activity) { ?>
			<li><?=$trail_activity?></li>
		<?php } ?>
	</ul>
</div>