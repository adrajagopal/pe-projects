
<div class="trail-details-card">
	<picture><img src="<?=$trail['portrait']?>" alt=""></picture>

	<h1 class="xl-voice"><?=$trail['name']?></h1>

	<h2 class="large-voice"><?=$trail['city']?></h2>

	<div class="trail-details">
		<ul class="medium-voice">
			<li><strong>Type:</strong> <?=$trail['type']?></li>
			<li><strong>Length:</strong> <?=$trail['length']?></li>
			<li><strong>Dog-friendly:</strong> <?=$trail['dog-friendly']?></li>
		</ul>

		<p class="medium-voice"><?=$trail['description']?></p>

		<p class="medium-voice"><strong>Activities:</strong></p>

		<div class="activity-box medium-voice">
			<ul class="activities medium-voice">
				<?php foreach ($trail['activities'] as $trail_activity) { ?>
					<li><?=$trail_activity?></li>
				<?php } ?>
			</ul>
		</div>
	</div>

</div>