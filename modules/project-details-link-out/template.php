<?php
	$url = $module['linkURL'] ?? "projects/$pageData[liveDemo]";
	$copy = $module['linkCopy'];
?>


<div class="link-out">
	<?php include(getFile('components/external-link/template.php'));?>
</a>