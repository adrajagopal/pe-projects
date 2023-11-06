<?php include("../header.php");?>

<?php 
	$heroTitle = "resume";
	$heroDescription = "//where i've been";

	$skills = ["HTML", "CSS", "JavaScript", "SQL", "PHP"];
	include(getFile('data/resume-job-list.php'));
?>

<div class="page-wrapper resume">
	<left-side>
		<div class="left-content">

			<section class="hero">
				<inner-column>
					<?php include(getFile('modules/hero/template.php'));?>
				</inner-column>
			</section>

			<section class="resume-intro">
				<inner-column>
					<?php include(getFile('modules/resume-intro/template.php'));?>
				</inner-column>
			</section>

		</div>
	</left-side>

	<right-side>
		<div class="right-content">
		<main>
			<inner-column>
				<?php include(getFile('modules/resume-work/template.php'));?>
				<?php include(getFile('modules/resume-education/template.php'));?>
				<?php include(getFile('modules/resume-skills/template.php'));?>
			</inner-column>
		</main>
		</div>
	</right-side>
</div> <!-- end .page-wrapper -->

<?php include(getFile("site-footer.php"));?>
