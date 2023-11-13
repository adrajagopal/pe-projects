<div class="project-card">
		
	<h3 class="large-voice"><?= $detail['title'] ?? "Sample header"?></h3>


	<p><?= $detail['oneLiner'] ?? "This is the first sentence/paragraph of the project case study. This is what it looks like."?></p>

	<?php if ($detail['hasCaseStudy']) { ?>
		<a href="?page=projectDetails&projectId=<?=$detail['projectId']?>">Read more</a>
	<?php } elseif (($detail['projectId'] === 'layoutGarden') OR ($detail['projectId'] === 'styleGuide')) { 
		$url = "?page=$detail[projectId]";
		$copy = "See it live";

		include(getFile('components/external-link/template.php'));
	} else {
		$url = "projects/$detail[liveDemo]";
		$copy = "See it live";

		include(getFile('components/external-link/template.php'));
	} ?>

</div>