<?php
	//pull in the JSON file
	$json = file_get_contents(getFile('layout-garden-modules/news-page/data/articles.json'));

	//convert to PHP array
	$articles = json_decode($json, true);
?>

<main>
	<aside>
		<ul>
			<?php foreach ($articles as $article) { ?>
				<li class="sidebar-item">
					<h1 class="large-voice"><?=$article['title']?></h1>
					<a href='#'>Read more</a>
				</li>

				<li class="sidebar-item">
					<h1 class="large-voice"><?=$article['title']?></h1>
					<a href='#'>Read more</a>
				</li>
			<?php } ?>
		</ul>

	</aside>
	<article class="featured">
		<picture>
			<img src="layout-garden-modules/images/green-clouds.svg" alt="">
		</picture>
		<text-content>
			<h1 class="xl-voice">Article title</h1>
			<p>Article description sentence that goes on for about this long or maybe a bit longer.</p>
		</text-content>
	</article>
	<article-grid>
		<ul>

		<?php foreach ($articles as $article) { ?>
			<li>
				<?php include(getFile('layout-garden-modules/article-card/template.php'));?>
			</li>
		<?php } ?>
		</ul>
	</article-grid>
</main>