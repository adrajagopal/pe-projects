<?php
	$page = "home";

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}

?>

<?php include("header.php");?>

<?php 
	$heroTitle = "hi, i'm Ad.";
	$heroDescription = "i'm a frontend developer."
?>

<div class="page-wrapper">
	<left-side>
		<div class="left-content">

			<section class="hero">
				<inner-column>
					<?php include(getFile('modules/hero/template.php'));?>
				</inner-column>
			</section>

			<section class="controls">
				<inner-column>
					<?php include(getFile('modules/biography-controls/template.php'));?>
				</inner-column>
			</section>
		</div>
	</left-side>

	<right-side>

		<main>

			<?php include(getFile('modules/biography-card/template.php'));?>

		</main>

	</right-side>
</div> <!-- end .page-wrapper -->
<?php include("site-footer.php");?>





