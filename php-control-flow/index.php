<html>
	<head></head>	
	<body>


	<h1>Welcome to my website!</h1>

	<h2>What brings you here?</h2>

	<form action="">
		<div class="field radio">
			<input type="radio" name="response">
			<label>Designer</label>
		</div>

		<div class="field radio">
			<input type="radio" name="response">
			<label>Developer</label>
		</div>

		<div class="field radio">
			<input type="radio" name="response">
			<label>Hiring Manager</label>
		</div>

		<div class="field radio">
			<input type="radio" name="response">
			<label>Customer</label>
		</div>

		<div class="field radio">
			<input type="radio" name="response">
			<label>Student</label>
		</div>

		<div class="field radio">
			<input type="radio" name="response">
			<label>None of the above - just browsing!</label>
		</div>
	</form>
	


	<?php
		$roles = ["Hiring Manager", "Designer", "Developer", "Customer", "Student", "Demon"];

		$rolesCount = count($roles);

		$title = $roles[rand(0, $rolesCount)];

	?>	

	<p style="margin-top:30px;">
		Looks like you're a <?=$title?>.
			
		<?php
			if ($title === "Designer" || $title === "Developer") {
				echo "DM me if you'd like to chat about design or code!";
			}

			elseif ($title === "Hiring Manager") {
				echo "Have you seen my resume and portfolio?";
			}

			elseif ($title === "Customer") {
				echo "I'd love to work together. You can reach out at the link in my bio.";
			}

			elseif ($title === "Student") {
				echo "Awesome! Happy learning.";
			}

			else {
				echo "Welcome $title! Have you seen my portfolio?";
			}

		?>

	</p>

	<p>Thanks for stopping by!</p>

	<div style="border-bottom: 2px solid firebrick;"></div>

	<!-- End section -->

	<h2>On the off-chance you came to review my PHP...</h2>

	<p>Let's start with a definition of keywords. Essentially, a keyword is just a word that has special meaning in a programming language. You can't use them for anything else.</p>

	<p>Here's a <a href="https://www.php.net/manual/en/reserved.keywords.php">list of keywords</a> from the PHP manual.</p>

	<h3>One thing that's confusing me...</h3>

	<p>Will a conditional statement evaluate if true, even if you don't explicitly say "if XXX is true?</p>

	<p>Let's look at an example.</p>

	<p>I'm going to set two variables: $one and $two.</p>

	<blockquote style="background-color:lightgray; padding: 20px;">
		<p>$one = 1;</p>
		<p>$two = 2;</p>
	</blockquote>

	<?php
		$one = 3;
		$two = 2;
		$three;
	?>

	<p>What does it really mean for a condition to be set <code style="background-color: black;color: palegreen;">if ($one)</code>?</p>

	<p>I have it set to print "One exists" if true, and "One does not exist" if false.</p>

	<p style="font-size: 40; color: blue;"><strong>The result:</strong></p>

	<?php

		if (3) {
			echo "One exists";
		}

		else {
			echo "One does not exist";
		}

	?>

	<h3>So now...let's try a second variation</h3>


	<p>Does anything change if I set <code style="background-color: black;color: palegreen;">if ($one) === true</code>?</p>

	<p><strong>The result:</strong></p>

	<?php

		if ($one === true) {
			echo "One exists";
		}

		else {
			echo "One does not exist";
		}

	?>

	<p>OK, so the result is the same. Which means that both are valid, but probably have different use cases.</p>


	<p>Maybe it's helpful to try a third case.</p>


		<p>What happens if I ask <code style="background-color: black;color: palegreen;">if ($three)</code>, without defining $three?</p>

	<p><strong>The result:</strong></p>

	<?php

		if ($three) {
			echo "Three exists";
		}

		else {
			echo "Three does not exist";
		}

	?>

	<p>OK - so I got an error.</p>

	</body>
</html>