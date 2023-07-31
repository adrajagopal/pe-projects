<?php
	$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	$trimmedPath = str_replace('/alpha-7/ad/sometrails/', '', $currentPath);
?>

<!-- This file is added to .gitignore because it works differently w/ MAMP vs. on the server -->