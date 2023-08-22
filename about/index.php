<?php include('../header.php');?>

<?php

	$page="goals";

	if ( isset($_GET['page'])) {
		$page = $_GET['page'];		
	}
?>

<inner-column>
	<?php include(getFile('modules/about-nav/template.php'));?>
</inner-column>

<?php
	if ($page === "goals") {
		include(getFile('modules/goals/index.php'));
	} elseif ($page === "resume") {
		include(getFile('modules/resume/index.php'));
	}
?>

<?php
	include(getFile('site-footer.php'));
?>

