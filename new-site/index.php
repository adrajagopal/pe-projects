<?php
	$page = "home";

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}

?>

<?php include("header.php");?>

<!-- the <div class="page-wrapper"> OPENING TAG is in the header.php file -- above the header -->

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

	<?php include("site-footer.php");?>


</div> <!-- end .page-wrapper -->


