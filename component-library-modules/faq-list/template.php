<div class="faq-list-container">
	<text-content>
		<h2 class="xl-voice">Frequently Asked Questions</h2>
		<p class="medium-voice">Some things you might want to know about me as a developer. You can always ask me more by getting in touch!</p>
	</text-content>

	<ul>
		<?php
			$json = file_get_contents(getFile('component-library-modules/faq-list/component-library-faqs.json'));
	
			$faqs = json_decode($json, true);
	
			foreach ($faqs as $faq) { ?>
	
				<li>
					<?php include(getFile('component-library-modules/faq-card/template.php'));?>
				</li>
		<?php } ?>
	</ul>
</div>