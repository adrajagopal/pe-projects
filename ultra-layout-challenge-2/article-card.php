<?php 
	$title = $article["title"] ?? "Template Article Title";
	$description = $article["description"] ?? "Template text";
	$ctaCopy = $article["cta-copy"] ?? "Template text";
	$link = $article["episode-link"] ?? "Template text";
?>

<article class="article-card">
	<h3 class="large-voice"><?=$title?></h3>
	<p class="medium-voice"><?=$description?></p>
	<a href="<?=$link?>" class="cta-button"><?=$ctaCopy?></a>
</article>