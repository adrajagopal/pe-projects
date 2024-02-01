<div class="category-dropdown">
	<details>
		<summary class="medium-voice">
			<h2 class="xl-voice question"><?=$section['name'] ?? "Section Header"?></h2>
			<div class="icon-container">
				<svg class="svg-icon" width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 18L15 12L9 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
		</summary>
		<ul class="module-list">
			<?php
				foreach ($section['modules'] as $module) { ?>
					<li class="module">
						<?php include(getFile("component-library-modules/$module[name]/template.php"));?>
					</li>
			<?php } ?>		
		</ul>

	</details>
</div>