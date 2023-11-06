<?php include("../header.php");?>

<?php 
	$heroTitle = "now";
	$heroDescription = "updated Nov 5, 2023";
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
				<text-content>
					<ul role="list">
						<li>hunting for a full-time job doing frontend web development</li>
						<li>finishing a 9-month frontend webdev mentorship at the end of the year</li>
						<li>working on some projects, which you can check out <a href="work">here</a></li>
					</ul>







				</text-content>
			</inner-column>
		</main>
		</div>
	</right-side>
</div> <!-- end .page-wrapper -->

<?php include(getFile("site-footer.php"));?>
