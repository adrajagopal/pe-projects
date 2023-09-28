<?php include('../../header.php');?>

<?php

	$json = file_get_contents(getFile('data/style-guide.json'));

	$modules = json_decode($json, true);

?>

<section class="welcome">
<inner-column>
	<h1 class="xxl-voice">Style Guide</h1>

	<p>Style guides are used to show how a design system would look for a given set of content. This includes typography (font sizes, weights, styles; letter spacing and line height; "voicings"), colors & contrast, component styling, and content spacing. The more content, the more comprehensive the guide.</p>
</inner-column>
</section>

<?php foreach($modules as $module) { ?>
<section>
	
	<?php
		$modulePath = 'modules/' . $module["module"] . '/template.php';
		$pagePath = 'modules/' . $module["module"] . '/index.php';

		if (file_exists(getFile($modulePath))) { ?>
			<inner-column>
			<?php include(getFile($modulePath)); ?>
			</inner-column>
		<?php } elseif (file_exists(getFile($pagePath))) {
			include(getFile($pagePath));
		}
	?>

</section>

<?php } ?>

<?php
	include(getFile('site-footer.php'));
?>
