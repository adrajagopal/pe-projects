<?php include("../config.php"); ?>

<!doctype html>

<html lang="en">

<head>
	<meta charset="UTF-8">

	<base href="<?=BASE_URL?>sometrails/">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>SomeTrails</title>

	<meta name="description" content="Explore Wisconsin's best trails.">

	<link rel="stylesheet" href="css/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
	
<?php
	$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	$trimmedPath = str_replace('/sometrails/', '', $currentPath);
?>

	<header>
		<section class="inner-column">
			<a href=""><picture><img src="images/sometrails-logo.png" alt="SomeTrails logo"></picture></a>
			<nav>
				<a href="trail-gallery.php" class="<?php if ($trimmedPath == "trail-gallery.php") { echo "active-page";}?>">Trails A-Z</a>
				<a href="suggest-a-trail.php" class="<?php if ($trimmedPath == "suggest-a-trail.php") { echo "active-page";}?>">Suggest a Trail</a>
			</nav>		
	</header>

	<main class="page-wrapper">