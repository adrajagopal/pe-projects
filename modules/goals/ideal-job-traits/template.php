<h3 class="large-voice">My needs for finding happiness at work</h3>

<ol role="list" class="numbered-list">
	<?php

		include('../data/ideal-job-database.php');
		
		foreach ($idealJobTraits as $trait) { 
			include("../modules/goals/ideal-job-traits-card/template.php");	
		}
	?>
</ol>



