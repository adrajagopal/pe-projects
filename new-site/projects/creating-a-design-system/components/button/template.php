<a 
	href="<?=$action['link'] ?? "#"?>"
	class="button <?=$action['class'] ?? ""?>"
>
	<span><?=$action['copy'] ?? "text"?></span>

	<?php if(isset($action['icon'])) { ?>
		<picture><?php include("images/$action[icon].svg"); ?></picture>
	<?php } ?>
</a>