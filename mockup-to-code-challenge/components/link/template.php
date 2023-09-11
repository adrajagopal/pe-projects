<div class="links-container">
	<a href="<?=$action['link'] ?? "#"?>">
		<span><?=$action['copy'] ?? "text"?></span>

		<div class="icon-container">
			<?php if (isset($action['icon'])) {
				include(getFile("images/$action[icon].svg"));
			} ?>
		</div>
	</a>
</div>