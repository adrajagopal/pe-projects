<?php
	$page = "home";

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}

	if ($page === "projectDetails") {
		if (isset($_GET["projectId"])) {
			$projectId = $_GET["projectId"];

			$json = file_get_contents("data/projects/$projectId.json");
		}
	} else {
		$json = file_get_contents("data/pages/$page.json");		
	}

	$pageData = json_decode($json, true);
?>

<?php include("header.php");?>

<?php 
	if ($page != "projectDetails") { 
		include(getFile('templates/main.php'));
	} elseif ($page === "projectDetails") { 
		include(getFile('templates/projectDetails.php'));
	} elseif ($page === "layoutGarden") {
		include(getFile('templates/layoutGarden.php'));
	}





?>

<?php include("site-footer.php");?>





