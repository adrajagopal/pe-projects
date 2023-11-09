<div class="project-card">

		<div class="top-banner">
			<h3 class="large-voice"><?= $detail['title'] ?? "sample header"?></h3>
		</div>
		<div class="bottom-section">
			<p><?= $detail['oneLiner'] ?? "This is the first sentence/paragraph of the project case study. This is what it looks like."?></p>
			<a href="?page=projectDetails&projectId=<?=$detail['projectId']?>">read more</a>
		</div>
		
</div>