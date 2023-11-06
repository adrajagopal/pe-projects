<?php include("../../header.php");?>

<?php 
	$heroTitle = "project name";
	$heroDescription = "//project description"
?>

<div class="page-wrapper">
	<left-side>
		<div class="left-content">

			<section class="hero">
				<inner-column>
					<?php include(getFile('modules/hero/template.php'));?>
				</inner-column>
			</section>

		</div>
	</left-side>

	<right-side>
		<div class="right-content">
		<main>
			<inner-column>

				

			</inner-column>
		</main>
		</div>
	</right-side>
</div> <!-- end .page-wrapper -->

<?php include(getFile("site-footer.php"));?>
