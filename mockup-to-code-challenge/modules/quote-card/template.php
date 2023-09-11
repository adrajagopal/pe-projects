<quote-card>
	<div class="stars">
		<?php
			for ($i = 0; $i < $quote['stars']; $i++) {
				include(getFile('images/star.svg'));
		} ?>
	</div>
	<p class="quote">"<?=$quote['quote']?>"</p>
	<div class="attribute-container">
		<picture class="client-portrait"><img src="images/<?=$quote['portrait']?>.jpg" alt=""></picture>
		<div class="name-container">
			<p class="name"><?=$quote['name']?></p>
			<p class="role"><?=$quote['role']?></p>
		</div>
	</div>
</quote-card>