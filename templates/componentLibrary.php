<div id="maincontent" class="page-wrapper <?=$page?>">
	<main>
		<?php
			foreach ($pageData['sections'] as $section) { ?>
				<section class="<?=$section['name']?>">
					<inner-column>
						<?php include(getFile("component-library-modules/$section[name]/template.php")); ?>
					</inner-column>
				</section>

		<?php } ?>
	</main>
</div> <!-- end .page-wrapper -->