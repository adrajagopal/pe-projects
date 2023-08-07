<?php include("config.php");?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?=BASE_URL?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

<!-- delete this comment once you've replaced the template content -->
	<title>Ad Rajagopal</title>

<!-- delete this comment once you've replaced the template content -->
	<meta name="description" content="This is some page. You hit it.">
	
<!-- delete this comment once you've replaced the template content -->
	<meta property="og:title" content="Ad's Portfolio'">

<!-- delete this comment once you've replaced the template content -->
	<!-- <meta
	  property="og:description"
	  content="[[INSERT CONTENT]]"> -->

<!-- delete this comment once you've replaced the template content -->
	<meta
	  property="og:image"
	  content="[[INSERT CONTENT]].png">
	
	<link rel="stylesheet" href="css/site.css">

<!-- 	fonts used:
	Vidaloka 400, 700
	Ubuntu 300, 400, 700 -->
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&family=Vidaloka&display=swap" rel="stylesheet">
</head>

<body>
	
<?php include('icons.php');?>

<section class="masthead">
	<div class="inner-column">
		<?php include("modules/masthead/template.php");?>
	</div>
</section>

<section class="welcome">
	<div class="inner-column">
		<?php include("modules/welcome/template.php");?>
	</div>
</section>

<section class="latest-projects">
	<div class="inner-column">
		<?php include("modules/latest-projects/template.php");?>
	</div>
</section>

<section class="about-me">
	<div class="inner-column">
		<?php include("modules/about-me/template.php");?>
	</div>
</section>

<section class="contact-me">
	<div class="inner-column">
		<?php include("modules/contact-me/template.php");?>
	</div>
</section>

<section class="site-map">
	<div class="inner-column">
		<?php include("modules/site-map/template.php");?>
	</div>
</section>