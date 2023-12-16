<?php

	$skills = $pageData['skills'];
	$languages = $pageData['languages'];

?>

<div class="skills-card">
	<h2 class="xl-voice section-title">Toolkit</h2>
	
	<div class="skill-group">
		<h3 class="large-voice">Languages</h3>
		<ul class="medium-voice skill-list">
			<?php
				foreach ($languages as $lang) { 
					echo "<li class='skill'>$lang</li>";
				} 
			?>
		</ul>
	</div>

	<div class="skill-group">
		<h3 class="large-voice">Skills</h3>
		<ul class="medium-voice skill-list">
			<?php
				foreach ($skills as $skill) { 
					echo "<li class='skill'>$skill</li>";
				} 
			?>
		</ul>
	</div>
</div>