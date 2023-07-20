<?php
	include("../header.php");
	include("../resume-job-list.php");
?>

<?php $skills = ["Properly nested HTML", "CSS", "SQL"]; ?>


<h1 class="content-header xxl-voice resume-title">Ad Rajagopal</h1>

<p class="medium-voice content-body">I'm a web developer. I'm coming to webdev with 7 years of experience in analytics, consulting and product management in the healthcare space. I've always worked on small-but-growing teams, whether that's deeply embedded in a corporation of 80,000 employees, or as the first IC product manager of a pre-seed startup. My former clients, colleagues, and managers would (and have!) described me as extremely organized, attentive to detail, proactive, brilliant, and a joy to be around. What will you say?</p>


<!-- Work Experience section -->

<h2 class="content-header xl-voice">Work Experience</h2>

<ul>

<?php foreach ($jobs as $job) { 
	$startDate = date_format($job["tenure"]["startDate"], "M Y");
	$endDate = date_format($job["tenure"]["endDate"], "M Y");
	$duration = date_diff($job["tenure"]["startDate"], $job["tenure"]["endDate"]);
?>
	
	<li>
		<h3 class="content-subheader large-voice"><?=$job["role"]?> | <?=$job["organization"]?> |&nbsp;<?=$startDate?>&nbsp;-&nbsp;<?=$endDate?> </h3>
		<ul>
			<?php
				foreach ($job["actions"] as $action) { ?>
					<li class="job-bullet"><?=$action?></li>
			<?php	} ?>
		</ul>
	</li>
<?php } ?>

</ul>

<!-- Education section -->

<h2 class="content-header xl-voice">Education</h2>

<h3 class="content-subheader large-voice">Perpetual Education - Design for the Web</h3>

<p class="content-body medium-voice">Design for the Web, 2023</p>
<p class="content-body medium-voice">Not your average frontend bootcamp.</p>

<h3 class="content-subheader large-voice">University of Florida, Gainesville</h3>

<p class="content-body medium-voice">BA Economics, Cum Laude, 2015</p>

<!-- Skill section -->

<h2 class="content-header xl-voice">Skills</h2>

<ul class="content-body medium-voice skill-list">
	<?php
		foreach ($skills as $skill) { 
			echo "<li class='skill'>$skill</li>";
		} 
	?>
</ul>



<?php include("../footer.php");?>