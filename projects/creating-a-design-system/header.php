<?php include('config.php');?>
<?php include('functions.php');?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?=BASE_URL?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

<!-- delete this comment once you've replaced the template content -->
	<title>Pixel Perfect Challenge</title>

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
	
	<link rel="stylesheet" href="css/site-min.css">

	<link rel="stylesheet" href="../../packages/flickity_v2.0/flickity.min.css" media="screen">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body class="<?=$page?>">
	
<?php include('../../icons.php');?>

<header class="site-header" aria-label="Site navigation menu">
	<inner-column>
		<div class="header-items"> <!--would it be appropriate to hide this using aria-hidden="true"? -->			
			<?php include(getFile('components/company-logo/template.php'));?>

			<nav class="site-nav">
				<button class="exit-menu">
					<?php include('images/square-cross.svg'); ?>
				</button>
				<ul class="site-nav-items">
					<li><a class="<?php if ($page === 'home') { echo 'active';}?>" href="">Theme One</a></li>
					<li><a class="<?php if ($page === 'wavy') { echo 'active';}?>" href="?page=wavy">Theme Two</a></li>
					<li><a class="<?php if ($page === 'blue') { echo 'active';}?>" href="?page=blue">Theme Three</a></li>
				</ul>
			</nav>

			<div class="login-items">
				<?php if ($page === 'home' OR $page === 'wavy') { ?>
					<a href="" class="language-dropdown">
						<div><?php include('images/globe.svg'); ?></div>
						<span>EN</span>
					</a>
				<?php } ?>

				<?php
					$json = file_get_contents("data/pages/$page.json");

					$pageData = json_decode($json, true);

					$links = $pageData['headerLinks'];

					foreach($links as $action) {
						include(getFile('components/button/template.php'));
					}
				?>
			</div>

			<button class="menu-hamburger">
				<?php include('images/three-lines.svg'); ?>
			</button>
		</div>
	</inner-column>
</header>

	<main class="page-wrapper">