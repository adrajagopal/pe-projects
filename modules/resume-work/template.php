<div class="resume-work">
	<h2 class="xl-voice section-title">Work Experience</h2>
	
	<ul role="list">
	
	<?php

		$json = file_get_contents('data/resumeJobs.json');

		$jobs = json_decode($json, true);

		foreach ($jobs as $job) { 
			$startDate = date_format(date_create($job["tenure"]["startDate"]), "M Y");
			$endDate = date_format(date_create($job["tenure"]["endDate"]), "M Y");
			$duration = date_diff(date_create($job["tenure"]["startDate"]), date_create($job["tenure"]["endDate"]));
	?>
		
		<li class="job-group">
			<h3 class="med-plus-voice"><?=$job["role"]?> | <?=$job["organization"]?> |&nbsp;<?=$startDate?>&nbsp;-&nbsp;<?=$endDate?> </h3>
			<ul role="list" class="bulleted-list">
				<?php
					foreach ($job["actions"] as $action) { ?>
						<li><?=$action?></li>
				<?php	} ?>
			</ul>
		</li>
	<?php } ?>
	
	</ul>
</div>