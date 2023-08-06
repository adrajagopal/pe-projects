
<?php
	$heading = $point['heading'];
	$description = $point['description'];
	$thumbnail = $point['thumbnail'];
?>

<article class='article-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>
	</text-content>
</article>
