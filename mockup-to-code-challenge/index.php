<?php
	$page = "home";

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}

?>

<nav style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 50px; font-size:8px;">
	<a href="?">Home</a>
	<a href="?page=wavy">Wavy</a>
	<a href="?page=blue">Blue</a>
</nav>

<?php include("header.php");?>

<ul class="modules">
	<?php 

		$json = file_get_contents("data/pages/$page.json");

		$pageData = json_decode($json, true);

		foreach ($pageData['sections'] as $section) { ?>
			<section class="<?=$section['name']?>">
				<inner-column>
					<?php include("modules/$section[name]/template.php");?>
				</inner-column>
			</section>
		<?php } ?>

</ul>

<?php include("site-footer.php");?>