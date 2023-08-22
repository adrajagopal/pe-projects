<?php 
	include(getFile('data/resume-job-list.php'));
	$skills = ["HTML", "CSS", "SQL", "PHP"];
?>

<section class="resume-intro">
	<inner-column>
		<?php include(getFile('modules/resume/resume-intro/template.php'));?>
	</inner-column>
</section>

<section class="work-experience">
	<inner-column>
		<?php include(getFile('modules/resume/work-experience/template.php'));?>
	</inner-column>
</section>

<section class="education-experience">
	<inner-column>
		<?php include(getFile('modules/resume/education-experience/template.php'));?>
	</inner-column>
</section>

<section class="skills-section">
	<inner-column>
		<?php include(getFile('modules/resume/skills-section/template.php'));?>
	</inner-column>
</section>