<?php include('../header.php');?>

<?php

	$json = file_get_contents(getFile('data/style-guide.json'));

	$modules = json_decode($json, true);

?>

<h1 class="xxl-voice">Style Guide</h1>

<p>Some description explaining a style guide</p>


<?php foreach($modules as $module) {

	include(getFile('modules/' . $module["module"] . '/template.php'));

	// 

} ?>

<?php
	include('../site-footer.php');
?>
