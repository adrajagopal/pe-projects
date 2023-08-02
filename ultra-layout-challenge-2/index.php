
<?php
	include("header.php");
	include("article-database.php");
	include("cta-database.php");
?>

<section class="diptych">
	<div class="inner-column">
		<?php	include("diptych.php");?>
	</div>
</section>

<section class="purple-cta">
	<div class="inner-column">
		<?php
			$type = "purple";
			include("call-to-action.php");
		?>
	</div>
</section>



<section class="article-parent">
	<div class="inner-column">
		<?php	include("article-grid.php");?>
	</div>
</section>

<section class="red-cta">
	<div class="inner-column">
		<?php
			$type = "red";
			include("call-to-action.php");
		?>
	</div>
</section>


<?php	include("footer.php");?>
