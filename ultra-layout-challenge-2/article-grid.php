<div class="article-grid">
	<div class="section-intro">
		<h2 class="xl-voice">This is an "article grid" module. This is its heading.</h2>
		<p class="medium-voice">Again, we totally just made that up. It's a box with boxes in it.</p>
	</div>
	<ul class="article-list">
		<?php foreach ($articles as $article) {
			$articleTitle = $article["title"];
			$articleDesc = $article["description"];
			$articleCtaCopy = $article["cta-copy"];
			$articleLink = $article["episode-link"];
			?>
		<li class="article">
			<h3 class="large-voice"><?=$articleTitle?></h3>
			<p class="medium-voice"><?=$articleDesc?></p>
			<a href="<?=$articleLink?>" class="cta-button"><?=$articleCtaCopy?></a>
		</li>
	<?php } ?>
	</ul>
</div>