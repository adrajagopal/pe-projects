<div class="article-grid">
	<div class="section-intro">
		<h2 class="xl-voice">This is an "article grid" module. This is its heading.</h2>
		<p class="medium-voice">Again, we totally just made that up. It's a box with boxes in it.</p>
	</div>
	<ul class="article-list">
		<?php foreach ($articles as $article) { ?>
		<li class="article">
			<?php include("article-card.php");?>
		</li>
	<?php } ?>
	</ul>
</div>