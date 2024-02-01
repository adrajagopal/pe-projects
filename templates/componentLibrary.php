<div id="maincontent" class="page-wrapper <?=$page?>">
	<main>
		<?php
			foreach ($pageData['sections'] as $section) { ?>
				<section class="<?=$section['name']?>">
					<inner-column>
						<?php
							$type = $section['type'];

							if ($type === "heading") {
								include(getFile("component-library-modules/component-library-heading/template.php"));
							} elseif ($type === "group") {
								include(getFile("component-library-modules/section-container/template.php"));
							}
						?>
					</inner-column>
				</section>

		<?php } ?>
	</main>
</div> <!-- end .page-wrapper -->