<?php 
	$heroTitle = $pageData['leftSections'][0]['content']['heading'];
	$heroDescription = $pageData['leftSections'][0]['content']['description'];
?>

<div class="hero-card">
	<text-content>
		<h1 class="xxl-voice"><?= $heroTitle ?? "sample header"?></h1>
		<p class="large-voice">//<?= $heroDescription ?? "sample description"?></p>
	</text-content>
</div>