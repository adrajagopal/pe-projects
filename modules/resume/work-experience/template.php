<h2 class="xl-voice">Work Experience</h2>

<ul>

<?php foreach ($jobs as $job) { 
	$startDate = date_format($job["tenure"]["startDate"], "M Y");
	$endDate = date_format($job["tenure"]["endDate"], "M Y");
	$duration = date_diff($job["tenure"]["startDate"], $job["tenure"]["endDate"]);
?>
	
	<li>
		<h3 class="large-voice"><?=$job["role"]?> | <?=$job["organization"]?> |&nbsp;<?=$startDate?>&nbsp;-&nbsp;<?=$endDate?> </h3>
		<ul>
			<?php
				foreach ($job["actions"] as $action) { ?>
					<li class="job-bullet"><?=$action?></li>
			<?php	} ?>
		</ul>
	</li>
<?php } ?>

</ul>