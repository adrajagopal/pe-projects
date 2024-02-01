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

	if (isset($projectId)) {
		$queryString = "?page=$page&projectId=$projectId";
	} else {
		$queryString = "?page=$page";
	}

?>

<?php include("header.php");?>

<?php 
	if ($page === "componentLibrary") {
		include(getFile('templates/componentLibrary.php'));
	} elseif ($page === "projectDetails") { 
		include(getFile('templates/projectDetails.php'));
	} else { 
		include(getFile('templates/main.php'));
	}
?>

<?php include("site-footer.php");?>





