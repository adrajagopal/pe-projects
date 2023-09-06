<?php include("header.php");?>

<ul class="modules">
	<?php 

		$json = file_get_contents(getFile('data/modules.json'));

		$modules = json_decode($json, true);

		foreach ($modules as $module) { ?>
			<section class="<?=$module['class']?>">
				<inner-column>
					<?php include("modules/$module[class]/template.php");?>
				</inner-column>
			</section>
		<?php } ?>

</ul>

<?php include("site-footer.php");?>