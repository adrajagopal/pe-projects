<?php
	$page = "home";

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}

?>

<?php include("header.php");?>

<div class="page-container">
	<div class="left-side">

		<header class="site-header" aria-label="Site navigation menu">
			<nav class="site-nav">
				<ul class="site-nav-items">
					<li><a href="home">home</a></li>
					<li><a href="work">work</a></li>
					<li><a href="resume">resume</a></li>
					<li><a href="get-in-touch">get in touch</a></li>
				</ul>
			</nav>
		</header>

		<div class="hero">
			<text-content>
				<h1 class="xxl-voice">Hi, I'm Ad.</h1>
				<h2 class="xl-voice">I'm a frontend developer.</h2>
			</text-content>
		</div>

		<div class="controls">
			<h3 class="large-voice">Controls:</h3>
			<button>click</button>
			<button>click</button>
			<button>click</button>
		</div>

	</div>

	<div class="right-side">

		<main class="page-wrapper">
		</main>

	</div>
	
<?php include("site-footer.php");?>

</div>


