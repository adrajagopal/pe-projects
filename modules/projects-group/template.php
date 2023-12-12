<?php

// variables from up higher -- in the project-level JSON
	$categoryTitle = $section['title'];
	$categoryDescription = $section['description'];
	$categoryId = $section['category']; //possible values: design or programming. same as categoryTitle, but lowercased

//filter the projectCategories file by the current category in this page section

	$json = file_get_contents(getFile('data/projectCategories.json'));

	$categories = json_decode($json, true);

	$filteredCategories = array_filter($categories, function($category) use ($categoryId) {
		return $category['id'] === $categoryId;
	});

	$filteredCategory = reset($filteredCategories);

	$projectsByCategory = $filteredCategory['projects']; //filtered list

//create an array to pull from in the project-grid

	$projectDetails = [];

	foreach ($projectsByCategory as $project) {
		$json = file_get_contents("data/projects/$project.json");

		$projectData = json_decode($json, true);

		$projectCopy = [
			'title' => $projectData['title'],
			'oneLiner' => $projectData['oneLiner'],
			'hasCaseStudy' => $projectData['hasCaseStudy'],
			'projectId' => $projectData['projectId'],
			'liveDemo' => $projectData['liveDemo'],
		];

		array_push($projectDetails, $projectCopy);
	}

?>
<div class="projects-group">

	<div class="category-title">
		<text-content>
			<h2 class="xl-voice"><?=$categoryTitle ?? "Sample title"?></h2>
			<p class="medium-voice">// <?=$categoryDescription ?? "Sample description"?></p>
		</text-content>
	</div>

	<div class="category-list">
		<?php include(getFile('modules/projects-grid/template.php'));?>
	</div>
</div>

