<?php include("../header.php");?>


<h1 class="hero-title xxl-voice">Code</h1>

<h2 class="content-header xl-voice">Here's a selection of projects.</h2>

<h3 class="content-subheader large-voice">Exercises for Programmers</h3>

<p class="content-body medium-voice">
	<a href="https://pragprog.com/titles/bhwb/exercises-for-programmers/" target="_blank">Exercises for Programmers</a> is a book of more than 50 practice exercises with real applications. Here are a few I've done.
</p>

<ul role="list" class="content-body medium-voice bulleted-list">
	<?php 
		include("exercises-for-programmers/e4p-list.php");

		foreach ($e4pExercises as $project) {
			include("exercises-for-programmers/e4p-card.php");
	} ?>
</ul>





<?php include("../footer.php")?>