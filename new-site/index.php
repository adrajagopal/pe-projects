<?php
	$page = "home";

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}

?>

<?php include("header.php");?>

<!-- the <div class="page-wrapper"> OPENING TAG is in the header.php file -- above the header -->

	<left-side>

		<div class="hero">
			<inner-column>
				<text-content>
					<h1 class="xxl-voice">Hi, I'm Ad.</h1>
					<h2 class="xl-voice">I'm a frontend developer.</h2>
				</text-content>
			</inner-column>
		</div>

		<div class="controls">
			<?php include(getFile('modules/biography-controls/template.php'));?>
		</div>

	</left-side>

	<right-side>

		<main>

			<?php include(getFile('modules/biography-card/template.php'));?>

		</main>

	</right-side>

	<?php include("site-footer.php");?>


</div> <!-- end .page-wrapper -->


