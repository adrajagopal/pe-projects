<div class="project-card">

		<div class="top-banner">
			<h3 class="large-voice"><?= $detail['title'] ?? "sample header"?></h3>
		</div>
		<div class="bottom-section">
			<p><?= $detail['oneLiner'] ?? "This is the first sentence/paragraph of the project case study. This is what it looks like."?></p>

			<?php if ($detail['hasCaseStudy']) { ?>
				<a href="?page=projectDetails&projectId=<?=$detail['projectId']?>">read more</a>
			<?php } else {
				$url = "projects/$detail[liveDemo]";
				$copy = "see it live";

				include(getFile('components/external-link/template.php'));
			} ?>
		</div>
		
</div>