<?php
	include("cta-database.php");

	if (isset($type)) {
			$info = $ctaHeadings[$type];
	} else {
		$info =  $ctaHeadings["default"];
	}
?>

<div class="call-to-action">
	<h2 class="xl-voice"><?=$info["heading"]?></h2>
	<p class="medium-voice"><?=$info["description"]?></p>
	<a href="<?=$info["link"]?>" class="cta-button"><?=$info["cta-copy"];?></a>
</div>