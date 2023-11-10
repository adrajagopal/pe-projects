<div class="page-wrapper <?=$page?>">
	<left-side>
		<div class="left-content">

			<?php
				foreach ($pageData['leftSections'] as $section) { ?>
					<section class="<?=$section['name']?>">
						<inner-column>
							<?php include(getFile("modules/$section[name]/template.php")); ?>
						</inner-column>
					</section>

			<?php } ?>

		</div>
	</left-side>

	<right-side>
		<div class="right-content">
		<main>
			<?php
				foreach ($pageData['rightSections'] as $section) { ?>
					<section class="<?=$section['name']?>">
						<inner-column>
							<?php include(getFile("modules/$section[name]/template.php")); ?>
						</inner-column>
					</section>

			<?php } ?>
		</main>
		</div>
	</right-side>
</div> <!-- end .page-wrapper -->