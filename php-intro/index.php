<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
<h1>Madlib 1: LFPS</h1>

<?php 
	$role = "web developer";
	$customers = "product teams";
	$services = "building well-designed applications";
	$diffStatement = "I have a background in product management, data, user research, and design, so I play well with anyone in the sandbox";



?>

<p>I’m a <?=$role?> who helps <?php echo $customers;?> with <?=$services?>. Unlike my competitors, <?=$diffStatement?>.</p>

<h1>Exercise 2: Build up echoes</h1>

<p><?php echo "Here's a string.";?></p>

<p><?php echo "Here's a number: " . 45;?></p>

<p><?php echo "Here's two numbers: " . 45 . ", " . 21;?></p>

<p><?php echo "Here's a few strings concatenated: " . "String 1; " . "String 2; " . "String 3; " .  "String 4; " .  "String 5! ";?></p>

<p><?php echo "Now, let's write a longer sentence -- " . "yes, a longer one -- " . "and let's use two dashes at the end of each string. Why? well -- " . "so that the reader can tell how many strings we concatenated -- " .  "very nice. Let's also multiply 3 and 481 together and see what we get -- " .  3 * 481;?></p>

<p>What was my role again from my LFPS? Hmm...let's recall the $role variable and see what it says. I think it was this: <span style="font-style: italic;"> <?php echo $role;?>.</span> Yep! That was it. Thanks.</p>

<?php	$homepage = "https://peprojects.dev/alpha-7/ad" ?>

<p>Had enough? Go <a href=<?=$homepage;?>>home</a>.

<h1>Ugly php</h1>

<?php
	echo "<h2>" . "This is an h2 written inside of a php echo." . "</h2>";

	echo "<p>" . "And here's a paragraph. Hmmm - we probably need to add a variable in here." . "</p>";

	echo "<p>" . $diffStatement . "</p>";

	echo "<p>" . "That's my diffStatement variable from my LFPS madlib." . "</p>";
?>

<h1>Madlib 2: Computer</h1>

<?php
	$noun = "butt pocket";
	$pluralNoun = "honkers";
	$verb = "optimize for destruction";
	$bodyParts = "Achilles' Heels";
	$adjective = "blindingly bright";
?>

<p>Today, every student has a computer small enough to fit into their <?=$noun?>. You can solve any math problem by simply pushing the computer’s little <?=$pluralNoun?>.</p>

<p>Computers can add, multiply, divide, and <?=$verb?>. They can also <?=$verb?> better than a human.</p>

<p>Some computers have their own <?=$bodyParts?>. Others have a <?=$adjective?> screen that shows all kinds of <?=$pluralNoun?> and <?=$adjective?> figures.</p>

</body>
</html>