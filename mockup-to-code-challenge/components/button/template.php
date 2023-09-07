<a 
	href="<?=$action['link'] ?? "#"?>"
	class="<?=$action['class'] ?? ""?>"
>
	<span><?=$action['copy'] ?? "text"?></span>

	<?php if(isset($action['icon'])) { ?>
		<picture><img src="images/<?=$action['icon']?>.svg" alt=""></picture>
	<?php } ?>
</a>