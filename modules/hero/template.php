<?php 
	
	if ($page === "projectDetails") {
		$heroTitle = $pageData['title'];
		$heroDescription = $pageData['oneLiner'];		
	} else {
		$heroTitle = $pageData['leftSections'][0]['content']['heading'];
		$heroDescription = $pageData['leftSections'][0]['content']['description'];
	}

?>

<div class="hero-card">
	<text-content>
		<h1 class="xxl-voice"><?= $heroTitle ?? "Sample Header"?></h1>
		<h2 class="large-voice code-comment">// <?= $heroDescription ?? "Sample description"?></h2>
	</text-content>
</div>