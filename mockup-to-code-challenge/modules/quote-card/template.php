<quote-card>
	<div class="stars">
		<?php
			for ($i = 0; $i < $quote['stars']; $i++) { ?>
				<picture><img src="images/star.svg" alt=""></picture>

		<?php	} ?>
	</div>
	<p>"<?=$quote['quote']?>"</p>
	<p><?=$quote['name']?></p>
	<p><?=$quote['role']?></p>
	<picture class="client-portrait"><img src="images/<?=$quote['portrait']?>.jpg" alt=""></picture>
</quote-card>