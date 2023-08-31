<?php
	$json = file_get_contents(getFile('layout-garden-modules/trail-grid/trail-grid-data.json'));

	$trails = json_decode($json, true);

	$title = "";
	$length = "";
	$time = "";
	$portrait = "";

?>

<section class="trail-grid-container">

	<h2 class="xl-voice">Trending Trails</h2>

	<ul class="trail-list">
		<?php foreach ($trails as $trail) {
			$title = $trail['title'];
			$length = $trail['length'];
			$time = $trail['time'];
			$portrait = $trail['portrait']; ?>
			
			<li>
				<picture><img src="<?=$portrait?>"></picture>
				<h3 class="medium-voice"><?=$title?></h3>
				<p>Length: <?=$length?> • Est. <?=$time?></p>
			</li>
		<?php } ?>
	</ul>

	<div class="see-more">
		<a href="projects/layout-garden#:~:text=Trending-,Trails,-Meyers%20Beach%20Sea">
			<h3 class="large-voice">See more trails</h3>
			<svg class="icon-"><use xlink:href="#icon-chevron-right"></use></svg>
		</a>
	</div>

</section>