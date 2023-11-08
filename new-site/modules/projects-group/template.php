<?php
	$categoryTitle = $section['title'];
	$categoryDescription = $section['description'];
	$categoryId = $section['category']; //possible values: design or programming. same as categoryTitle, but lowercased

	$json = file_get_contents(getFile('data/projectCategories.json'));

	$categories = json_decode($json, true);

	$filteredCategories = array_filter($categories, function($category) use ($categoryId) {
		return $category['id'] === $categoryId;
	});

	$filteredCategory = reset($filteredCategories);

	$projectsByCategory = $filteredCategory['projects'];

	$projectDetails = [];

	//get a list of project title and one-liner for all the projects
	//for each project in the category, go get the data from the file

	foreach ($projectsByCategory as $project) {
		$json = file_get_contents("data/projects/$project.json");

		$projectData = json_decode($json, true);

		$projectCopy = [
			'title' => $projectData['title'],
			'oneLiner' => $projectData['oneLiner']
		];

		array_push($projectDetails, $projectCopy);
	}

?>

<div class="category-title">
	<text-content>
		<h2 class="xl-voice"><?=$categoryTitle ?? "Sample title"?></h2>
		<p class="medium-voice"><?=$categoryDescription ?? "Sample description"?></p>
	</text-content>
</div>

<div class="projects-grid">

	<ul role="list" class="bulleted-list">

		<?php
			foreach ($projectDetails as $detail) { ?>
				<li>
					<p><?=$detail['title']?></p>
					<p><?=$detail['oneLiner']?></p>
				</li>
		<?php } ?>



	</ul>


</div>

<!-- [
	{
		"category": "design",
		"projects": ["designSystem", "layoutGarden", "styleGuide", "themeChallenge"]
	}
]
-->