<?php	include('header.php');?>


<?php
	
	$name = '';
	$message = 'Try again';


/* check if the form has been submitted
	if yes, then check if name is valid
	if yes, add it to the name database

["Jimmy", "Bimmy", "Pimmy"]

*/

display($_POST);

	if (isset($_POST["submitted"])) { //check if post submitted

		if (!empty($_POST["name"])) { //check if name is populated

			$name = $_POST["name"];
			echo "test";

			$json = file_get_contents('data/names.json'); //grab json file

			$namesList = json_decode($json, true); //decode to php

			array_push($namesList, $name); //create new list with new name added to end of list

			$json = json_encode($namesList); //encode new list as json

			file_put_contents('data/names.json', $json); //write new list to file destination

			$name='';

		} else {
			echo "warning";
		}
	}

?>



<h1 class="xl-voice">Form Title</h1>

<form method="POST">
	<fieldset class="field short-text">
		<legend>What is your name</legend>
		<input type="text" name="name" value="<?=$name?>">
		<p class="warning">warning</p>
	</fieldset>


<div class="submit-container">
		<button type="submit" name="submitted">Submit</button>
		<p class="warning">warning</p>
	</div>
	
	<p class="success">success message</p>

	<?php 
		if ($entered = false) {
			echo "some message";
		} else {
			foreach ($namesList as $name) {
				echo "<p>$name</p>";
			}
	}
	?>
</form>


<?php include('site-footer.php');?>