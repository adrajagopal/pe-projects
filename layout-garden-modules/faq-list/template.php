<div class="faq-list-container">
	<text-content>
		<h2 class="xl-voice">Frequently Asked Questions</h2>
		<p class="medium-voice">Pellentesque cras adipiscing tempus libero vel nullam mauris tellus. Aliquam ultrices tellus consequat amet, lectus aliquam est in neque.</p>
	</text-content>

	<ul>
		<?php
			$json = file_get_contents(getFile('data/layout-garden-faqs.json'));
	
			$faqs = json_decode($json, true);
	
			foreach ($faqs as $faq) { ?>
	
				<li>
					<?php include(getFile('layout-garden-modules/faq-card/template.php'));?>
				</li>
		<?php } ?>
	</ul>
</div>