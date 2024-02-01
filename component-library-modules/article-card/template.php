<?php
	$title = $article['title'];
	$description = $article['description'];
	$portrait = $article['portrait'];
?>

<article class='layout-article-card'>
	<picture>
		<img src='layout-garden-modules/images/<?=$portrait?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title xl-voice'><?=$title?></h1>

		<p class='description'><?=$description?></p>

		<a class='button' href='#'>Call to action</a>
	</text-content>
</article>
