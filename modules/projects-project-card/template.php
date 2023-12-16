<div class="project-card">
		
	<h3 class="large-voice"><?= $detail['title'] ?? "Sample header"?></h3>


	<p><?= $detail['oneLiner'] ?? "This is the first sentence/paragraph of the project case study. This is what it looks like."?></p>


	<div class="card-links">
		<?php 
			if ($detail['title'] === 'Coming Soon...') {

			} elseif ($detail['hasCaseStudy']) { ?>
			<!-- show case study + live demo link -->
			<a href="?page=projectDetails&projectId=<?=$detail['projectId']?>">Read more</a>

			<?php $url = "projects/$detail[liveDemo]";
			$copy = "See it live";

			include(getFile('components/external-link/template.php')); ?>
		<?php } elseif (($detail['projectId'] === 'layoutGarden') OR ($detail['projectId'] === 'styleGuide')) { 
			// link straight to the projectId
			$url = "?page=$detail[projectId]";
			$copy = "See it live";

			include(getFile('components/external-link/template.php'));
		} else {
			// if it's a demo and i haven't written a case study yet, just link to the live demo link

			$url = "projects/$detail[liveDemo]";
			$copy = "See it live";

			include(getFile('components/external-link/template.php'));
		} ?>
	</div>
</div>