<div class="projects-grid">

	<ul role="list">

		<?php
			foreach ($projectDetails as $detail) { ?>
				<li>
					<?php include(getFile('modules/projects-project-card/template.php'));?>
				</li>
		<?php } ?>

	</ul>


</div>