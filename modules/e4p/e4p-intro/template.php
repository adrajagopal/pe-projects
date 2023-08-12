<h3 class="large-voice">Exercises for Programmers</h3>

<p>
	<a href="https://pragprog.com/titles/bhwb/exercises-for-programmers/" target="_blank">Exercises for Programmers</a> is a book of more than 50 practice exercises with real applications. Here are a few I've done.
</p>

<p>
	The purpose of these exercises is to think through real-world problems and practice working constraints, handling edge cases, and generally make good user experience decisions. It also tends to involve a lot of practice with forms...
</p>

<ul role="list" class="medium-voice bulleted-list">
	<?php 
		include(getFile('data/e4p-list.php'));

		foreach ($e4pExercises as $project) {
			include(getFile("modules/e4p/e4p-card/template.php"));
	} ?>
</ul>