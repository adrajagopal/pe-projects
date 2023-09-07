<div class="links-container">
	<a href="<?=$action['link'] ?? "#"?>">
		<span><?=$action['copy'] ?? "text"?></span>

		<?php if (isset($action['icon'])) { ?>
			<picture><img src="images/<?=$action['icon']?>.svg" alt=""></picture>
		<?php } ?>
	</a>
</div>