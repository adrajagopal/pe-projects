<section class="gallery-1-wrapper">

<?php
	$articles = [
		['title' => 'Heading level 3 small',
		'description' => 'This is some body text. This is some body text. This is some body text.', 'portrait' => ''],
		['title' => 'Heading level 3 small',
		'description' => 'This is some body text. This is some body text. This is some body text.', 'portrait' => ''],
		['title' => 'Heading level 3 small',
		'description' => 'This is some body text. This is some body text. This is some body text.', 'portrait' => ''],
		['title' => 'Heading level 3 small',
		'description' => 'This is some body text. This is some body text. This is some body text.', 'portrait' => ''],
		['title' => 'Heading level 3 small',
		'description' => 'This is some body text. This is some body text. This is some body text.', 'portrait' => ''],
		['title' => 'Heading level 3 small',
		'description' => 'This is some body text. This is some body text. This is some body text.', 'portrait' => ''],
	]
?>

<!-- 	<section class="title"> -->
	<h2 class="xl-voice">Heading level 2 small</h2>
	<p class="p">This is some body text. This is some body text. This is some body text.</p>
<!-- 	</section class="title"> -->


	<ul class="article-grid">
		<?php foreach ($articles as $article) { ?>
			<li class="card-container">
				<?php	include(getFile('layout-garden-modules/article-card/template.php')); ?>
			</li>
		<?php } ?>
	</ul>

	<ul class="photo-gallery">
		<li class="photos">
			<picture><img src="https://peprojects.dev/images/landscape.jpg" alt=""></picture>
		</li>
		<li class="photos">
			<picture><img src="https://peprojects.dev/images/landscape.jpg" alt=""></picture>
		</li>
		<li class="photos">
			<picture><img src="https://peprojects.dev/images/landscape.jpg" alt=""></picture>
		</li>
		<li class="photos">
			<picture><img src="https://peprojects.dev/images/landscape.jpg" alt=""></picture>
		</li>
	</ul>
</section>