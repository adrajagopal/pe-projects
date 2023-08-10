<h2 class="xl-voice">The deets</h2>

<h3 class="large-voice">General milestones</h3>

<ul role="list">
	<?php
		foreach ($courseGoals as $goal) {
			include("../modules/goals/course-goals-card/template.php");
		}
	?>
</ul>