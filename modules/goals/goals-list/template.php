<h2 class="xl-voice">What I'm shooting for</h2>

<h3 class="large-voice">General milestones</h3>

<ul role="list">
	<?php

		include(getFile('data/course-goals-database.php'));

		foreach ($courseGoals as $goal) {
			include(getFile('modules/goals/course-goals-card/template.php'));
		}
	?>
</ul>