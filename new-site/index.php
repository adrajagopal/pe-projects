<?php
	$page = "home";

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}

	if ($page === "projectDetails") {
		if (isset($_GET["projectId"])) {
			$projectId = $_GET["projectId"];

			$json = file_get_contents("data/projects/$projectId.json");
		}
	} else {
		$json = file_get_contents("data/pages/$page.json");		
	}

	$pageData = json_decode($json, true);
?>

<?php include("header.php");?>

<?php if ($page != "projectDetails") { ?> 

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
<?php } ?>

<?php if ($page === "projectDetails") { ?> 

	<div class="page-wrapper <?=$page?>">
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
<?php } ?>

<?php include("site-footer.php");?>





