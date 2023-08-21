<?php include('../header.php');?>

<?php include(getFile('modules/about-nav/template.php'));?>

<?php

	$page="";

	if ( isset($_GET['page'])) {
		$page = $_GET['page'];		
	}

	if ($page === "goals") {
		include(getFile('modules/goals/index.php'));
	} elseif ($page === "resume") {
		include(getFile('modules/resume/index.php'));
	} else {
		echo "<p class='xxl-voice'>not sure what to do here yet</p>";
	}

?>



<?php
	include(getFile('site-footer.php'));
?>

