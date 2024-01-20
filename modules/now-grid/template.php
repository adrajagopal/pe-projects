<?php
	$json = file_get_contents('data/nowList.json');

	$nowGroups = json_decode($json, true);
?>

<ul class="now-grid" aria-label="What I'm up to right now">
	
<?php
	foreach ($nowGroups as $nowGroup) {
		$category = $nowGroup['category'];
		$items = $nowGroup['items'];

		include(getFile('modules/now-card/template.php'));
	}
?>

</ul>