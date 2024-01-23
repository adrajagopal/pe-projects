<?php include("config.php");?>
<?php include("functions.php");?>

<?php //load theme hue
	$activeHue = 210;

	if (isset($_COOKIE["themeCode"])) {
		$activeHue = $_COOKIE["themeCode"];
	}
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?=BASE_URL?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ad Rajagopal</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.svg">

	<meta name="description" content="Product- & design-focused frontend dev">

	<meta
	  property="og:image"
	  content="https://adrajagopal.com/images/favicon.svg">
	
	<link rel="stylesheet" href="css/site-min.css">

<!-- 	fonts used:
Inter -->

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>

<body style="--hue: <?=$activeHue?>">
	
<?php include('icons.php');?>
<header class="site-header" aria-label="Site navigation menu">
	<inner-column>
		<a href="<?=$queryString?>#maincontent" class="skiplink">Skip to main content</a>
		<div class="header-items">
			<nav class="site-nav">
				<ul class="site-nav-items">
					<li><a href="?page=home" class="<?php if ($page === "home") { echo "active";} ?>">Home</a></li>
					<li><a href="?page=work" class="<?php if ($page === "work") { echo "active";} ?>">Work</a></li>
					<li><a href="?page=resume" class="<?php if ($page === "resume") { echo "active";} ?>">Résumé </a></li>
					<li><a href="?page=now" class="<?php if ($page === "now") { echo "active";} ?>">Now</a></li>
				</ul>
			</nav>
			
			<?php include("modules/theme-selector/template.php");?>
		</div>
	</inner-column>
</header>