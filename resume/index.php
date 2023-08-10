<head>
	<link rel="stylesheet" href="../css/site.css"> 
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&family=Vidaloka&display=swap" rel="stylesheet">
</head>

<?php
	// include("../header.php");
	include("../data/resume-job-list.php");
?>

<?php $skills = ["HTML", "CSS", "SQL", "PHP"]; ?>

<section class="resume-intro">
	<div class="inner-column">
		<?php include("../modules/resume/resume-intro/template.php");?>
	</div>
</section>

<section class="work-experience">
	<div class="inner-column">
		<?php include("../modules/resume/work-experience/template.php");?>
	</div>
</section>

<section class="education-experience">
	<div class="inner-column">
		<?php include("../modules/resume/education-experience/template.php");?>
	</div>
</section>

<section class="skills-section">
	<div class="inner-column">
		<?php include("../modules/resume/skills-section/template.php");?>
	</div>
</section>

<?php include("../footer.php");?>