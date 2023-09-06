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

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body class="<?=$page?>">
	
<?php include('../icons.php');?>

<header class="site-header" aria-label="Site navigation menu">
	<inner-column>
		<div class="header-items"> <!--would it be appropriate to hide this using aria-hidden="true"? -->			
			<?php include(getFile('components/company-logo/template.php'));?>

			<nav class="site-nav">
				<ul class="site-nav-items">
					<li><a href="">Home</a></li>
					<li><a href="">Updates</a></li>
					<li><a href="">Services</a></li>
					<li><a href="">Features</a></li>
					<li><a href="">About Us</a></li>
				</ul>
			</nav>

			<div class="login-items">
				<a href="" class="language-dropdown">
					<picture><img src="images/language-icon.jpg" alt=""></picture>
				</a>
				<a href="" class="login">Log in</a>
				<a href="" class="signup">Sign up</a>
			</div>

			<a href="" class="menu-hamburger">
				<svg viewBox='0 0 3 3'>
					<rect width='3' height='3' />
				</svg>
			</a>
		</div>
	</inner-column>
</header>

	<main class="page-wrapper">