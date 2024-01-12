<?php
	$url = $submodule['linkURL'] ?? $module['linkURL'] ?? "projects/$pageData[liveDemo]";
	$copy = $submodule['linkCopy'] ?? $module['linkCopy'];
?>


<div class="link-out">
	<?php include(getFile('components/external-link/template.php'));?>
</div>