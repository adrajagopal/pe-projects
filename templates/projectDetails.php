<div id="maincontent" class="page-wrapper <?=$page?>">
	<left-side>
		<div class="left-content">

			<section class="hero">
				<inner-column>
					<?php include(getFile("modules/hero/template.php")); ?>
				</inner-column>
			</section>

		</div>
	</left-side>

	<right-side>
		<div class="right-content">
		<main>
			<article>
			<?php
				foreach ($pageData['sections'] as $section) { ?>
					<section class="<?=$section['title']?>">
						<inner-column>
							<?php 
								foreach ($section['modules'] as $module) {
									include(getFile("modules/project-details-$module[type]/template.php"));
								}
							?>
						</inner-column>
					</section>

			<?php } ?>
			</article> <!-- -->
		</main>
		</div>
	</right-side>
</div> <!-- end .page-wrapper -->