<?php include("header.php");?>

<?php

	$version = "";

	settype($version, "string");

	if (isset($version)) {
		$versionNumber = $_GET['version'];
	} else {
		$versionNumber = "none";
	}

	echo "<p class='medium-voice'>$versionNumber</p>";

	?>

<?php include("footer.php");?>