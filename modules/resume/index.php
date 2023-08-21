<?php 
	include(getFile('data/resume-job-list.php'));
	$skills = ["HTML", "CSS", "SQL", "PHP"];
?>

<section class="resume-intro">
	<div class="inner-column">
		<?php include(getFile('modules/resume/resume-intro/template.php'));?>
	</div>
</section>

<section class="work-experience">
	<div class="inner-column">
		<?php include(getFile('modules/resume/work-experience/template.php'));?>
	</div>
</section>

<section class="education-experience">
	<div class="inner-column">
		<?php include(getFile('modules/resume/education-experience/template.php'));?>
	</div>
</section>

<section class="skills-section">
	<div class="inner-column">
		<?php include(getFile('modules/resume/skills-section/template.php'));?>
	</div>
</section>