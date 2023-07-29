<?php
	include("header.php");
	include("trail-database.php");
?>

<section class="inner-column">
	<nav class="go-back"><a href="trail-gallery.php"><-- Back to trail gallery</a></nav>

	<?php
		if (isset($_GET['id'])) { //first, check if querystring has id
			$trail_id = $_GET['id']; //if yes, set it

			foreach ($trails as $trail) { //then loop through and find a match in the database
				if ($trail_id === $trail['id']) {
					include("trail-details-card.php"); //if match found, display details
				}
			}

		} else { //if no match found, or if no param in querystring, then show dead-end page
			include("dead-end.php");
		} ?>
				
</section>

<?php include("footer.php");?>