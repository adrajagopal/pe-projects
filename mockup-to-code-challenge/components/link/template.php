<div class="links-container">
	<a href="<?=$action['link'] ?? "#"?>">
		<span><?=$action['copy'] ?? "text"?></span>

		<?php if (isset($action['icon'])) {
			include(getFile("images/$action[icon].svg"));
		} ?>
	</a>
</div>