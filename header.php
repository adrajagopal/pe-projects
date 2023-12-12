<?php include("config.php");?>
<?php include("functions.php");?>

<?php //load theme hue
	$activeHue = 210;

	if (isset($_COOKIE["themeCode"])) {
		$activeHue = $_COOKIE["themeCode"];
	}
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <base href="<?=BASE_URL?>"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

<!-- delete this comment once you've replaced the template content -->
	<title>Ad Rajagopal</title>

<!-- delete this comment once you've replaced the template content -->
	<meta name="description" content="Front end developer">
	
<!-- delete this comment once you've replaced the template content -->
	<meta property="og:title" content="">

<!-- delete this comment once you've replaced the template content -->
	<!-- <meta
	  property="og:description"
	  content="[[INSERT CONTENT]]"> -->

<!-- delete this comment once you've replaced the template content -->
	<meta
	  property="og:image"
	  content="[[INSERT CONTENT]].png">
	
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
		<div class="header-items">
			<nav class="site-nav">
				<ul class="site-nav-items">
					<li><a href="?page=home" class="<?php if ($page === "home") { echo "active";} ?>">Home</a></li>
					<li><a href="?page=work" class="<?php if ($page === "work") { echo "active";} ?>">Work</a></li>
					<li><a href="?page=resume" class="<?php if ($page === "resume") { echo "active";} ?>">Resume</a></li>
					<li><a href="?page=now" class="<?php if ($page === "now") { echo "active";} ?>">Now</a></li>
				</ul>
			</nav>
			
			<?php include("modules/theme-selector/template.php");?>
		</div>
	</inner-column>
</header>