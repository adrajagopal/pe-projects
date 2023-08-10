<head>
	<link rel="stylesheet" href="../css/site.css"> 
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&family=Vidaloka&display=swap" rel="stylesheet">
</head>

<?php
	// include("../header.php");
?>

<section class="welcome">
	<div class="inner-column">
		<?php include("../modules/goals/goals-intro/template.php"); ?>
	</div>
</section>

<section class="course-goals">
	<div class="inner-column">
		<?php include("../data/course-goals-database.php"); ?>
		<?php include("../modules/goals/goals-list/template.php");?>
		<?php include("../modules/goals/course-goals-card/template.php");?>
	</div>
</section>

<section class="job-traits">
	 <div class="inner-column">
		<?php	include("../data/ideal-job-database.php");?>
		<?php include("../modules/goals/ideal-job-traits/template.php");?>
	 </div>
</section>

<?php
	// include('../footer.php');
?>