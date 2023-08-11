<?php include('../head.php');?>

<section class="masthead">
	<div class="inner-column">
		<?php include("../modules/masthead/template.php"); ?>
	</div>
</section>

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
	include('../modules/site-map/template.php');
?>