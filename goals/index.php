<?php include('../header.php');?>

<section class="welcome">
	<div class="inner-column">
		<?php include(getFile('modules/goals/goals-intro/template.php'));?>
	</div>
</section>

<section class="course-goals">
	<div class="inner-column">
		<?php include(getFile('modules/goals/goals-list/template.php'));?>

	</div>
</section>

<section class="job-traits">
	 <div class="inner-column">
		<?php include(getFile('modules/goals/ideal-job-traits/template.php'));?>
	 </div>
</section>

<?php
	include(getFile('site-footer.php'));
?>

