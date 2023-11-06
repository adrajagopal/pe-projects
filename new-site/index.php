<?php
	$page = "home";

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}

	$json = file_get_contents("data/pages/$page.json");

	$pageData = json_decode($json, true);

?>

<?php include("header.php");?>

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

<?php include("site-footer.php");?>





