<div class="category-dropdown">
	<details>
		<summary class="medium-voice">
			<div class="icon-container">
				<svg class="svg-icon" width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 18L15 12L9 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
			<h2 class="xl-voice question"><?=$section['name'] ?? "Section Header"?></h2>
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