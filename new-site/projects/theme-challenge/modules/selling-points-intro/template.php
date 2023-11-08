
<?php include ('data/selling-points.php'); ?>

<selling-points-intro>
	<header>
		<h2 class='attention-voice'>Helfy brings you the best of both in healthcare</h2>

		<p>Our members enjoy the access of virtual care and a high-touch in-person experience.</p>
	</header>

	<selling-point-grid>
		<ul class='article-list'>

			<?php foreach ($points as $point) { ?>
				<li class='article'>
					<?php include('modules/selling-points-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</selling-point-grid>
</selling-points-intro>
