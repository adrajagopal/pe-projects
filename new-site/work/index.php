<?php include("../header.php");?>

<?php 
	$heroTitle = "my work";
	$heroDescription = "//what i've made"
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

				<section>
					<text-content>
						<h3 class="large-voice"><strong>Design</strong></h3>
						<p class="medium-voice">Using HTML & CSS to build responsive layouts, accessible content, and design systems</p>
					</text-content>
				</section>

				<section>
					<text-content>
						<h3 class="large-voice"><strong>Programming</strong></h3>
						<p class="medium-voice">Using JavaScript and PHP to build interactive UIs</p>
					</text-content>

				</section>
			</inner-column>
		</main>
		</div>
	</right-side>
</div> <!-- end .page-wrapper -->

<?php include(getFile("site-footer.php"));?>
