<!doctype html>

<html lang="en">
	<head>
		<title>Resume</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="Resume">
		<meta property="og:description" content="Who doesn't love a hand-coded resume?">
		<meta property="og:image" content="https://peprojects.dev/alpha-7/ad/resume/images/resume.jpg">
		<link rel="stylesheet" href="../styles/style.css">
		<style>
			body {
/*				background-color: darkslategrey;*/
				border: 2px solid indianred;
				border-left-width: 10px;
				border-radius: 8px;
				margin: 10px;
		</style>
	</head>

	<body>
		
		<header>
			<h1>Ad Rajagopal</h1>
			<p>I'm a web developer. I'm coming to webdev with 7 years of experience in analytics, consulting and product management in the healthcare space. I've always worked on small-but-growing teams, whether that's deeply embedded in a corporation of 80,000 employees, or as the first IC product manager of a pre-seed startup. My former clients, colleagues, and managers would (and have!) described me as extremely organized, attentive to detail, proactive, brilliant, and a joy to be around. What will you say?</p>
		</header>

		<main class="work-experience">
			<h2>Work Experience</h2>


			<?php

				$jobObject = [
					"jobTitle" => "Product Manager",
					"company" => "Oshi Health",
					"duration" => "🗓️ May 2021 - Dec 2022",
					"bullet1" => "Joined as the second member of the product team, directly responsible for mobile app, web app, and web platform products. Led product operations from seed stage through Series A and in preparation for Series B fundraising",
					"bullet2" => "Played many roles, working on everything from typical product tasks to user research, data analysis, project management, QA/feature testing, copy & design reviews",
					"bullet3" => "Improved product quality - in other words, my features shipped more predictably and with fewer bugs - through clear product documentation, increased transparency with stakeholders, better collaboration with design and engineering, and more getting in the weeds to test",
					"bullet4" => "Drove key metrics with major releases: reduced appointment no-shows/late cancelations, reduced overhead on routine tasks for clinical support staff, and simplified time to complete intake paperwork",
				];

			?>



			<!-- i should make these highlightable tooltips where i can give info on the company -->

			<ul class="resume-list">I was a
				<span class="resume-job-title">
					<?=$jobObject["jobTitle"]?>
				</span> at

				<span class="resume-company-title">
						<?=$jobObject["company"]?>
				</span> from

				<span class="resume-job-duration">
						<?=$jobObject["duration"]?>
				</span>

				<li class="bulleted-list">
						<?=$jobObject["bullet1"]?>
				</li>

				<li class="bulleted-list">
						<?=$jobObject["bullet2"]?>
				</li>

				<li class="bulleted-list">
						<?=$jobObject["bullet3"]?>
				</li>
				
				<li class="bulleted-list">
						<?=$jobObject["bullet4"]?>
				</li>

			</ul>

			<ul class="resume-list">I was a
				<span class="resume-job-title">Product Manager</span> at
				<span class="resume-company-title">IQVIA</span> from
					<!-- should this just be a link instead of a higlight? -->
				<span class="resume-job-duration">🗓️ Jan 2020 - May 2021</span>
				<li class="bulleted-list">Helped start a product management team to turn the ad-hoc consulting offering into an off-the-shelf software library for data scientists, in order to grow sales at a faster rate
				<li class="bulleted-list">Played a leading role in defining the MVP, and worked closely with both clients and data science & engineering to improve the offering</li>
				<li class="bulleted-list">Led the build of internal tooling to reduce project delivery times by up to 50%, roughly doubling profit margins across projects</li>
				<li class="bulleted-list">Trained consultants on methodology, model interpretation, client communication, and other project delivery skills</li>
			</ul>

			<ul class="resume-list">I was a
				<span class="resume-job-title">Consultant</span> at
				<span class="resume-company-title">IQVIA</span> from
					<!-- should this just be a link instead of a higlight? -->
				<span class="resume-job-duration">🗓️ Jul 2018 - Jan 2020</span>
				<li class="bulleted-list">Joined as an early member of a startup team focused on building a first-in-class machine learning application for predicting rare disease diagnoses and disease progressions in large healthcare datasets</li>
				<li class="bulleted-list">Led the delivery of machine learning projects for large pharmaceutical clients, and my performance was a significant factor in a Fortune 500 client's decision to sign a 4-year contract extension and extend our work to their entire immunology portfolio</li>
				<li class="bulleted-list">Led hiring and interviews for the consulting team, helping grow the team from 4 to 15 people in two years while maintaining a happy, healthy, inclusive culture</li>
			</ul>

			<ul class="resume-list">I was an
				<span class="resume-job-title">Analyst --> Associate&nbsp;Consultant</span> at
				<span class="resume-company-title">IQVIA</span> from
					<!-- should this just be a link instead of a higlight? -->
				<span class="resume-job-duration">🗓️ Jan 2016 - Jun 2018</span>
				<li class="bulleted-list">Became an Excel wiz & spreadsheet lover; learned soft skills; developed a love for working at the intersection of technical and non-technical teams</li>
			</ul>
	
		</main>

		<section class="education">
			<h2>Education</h2>

			<ul class="paragraph-list">
				<li>
					<p><span class="list-item-title">Perpetual Education</span></p>
					<p>Design for the Web - Dec 2023 (expected)</p>
				</li>
				<li>
					<p><span class="list-item-title">The University of Florida, Gainesville</span></p>
					<p>BA Economics, Cum Laude - Dec 2015</p>
				</li>
		</section>

		<aside class="resume-skills-section">

			<h2>Technical know-how</h2>

			<span class="resume-skill">Semantic HTML</span>
			<span class="resume-skill">CSS</span>
			<span class="resume-skill">putting boxes around things</span>

		</aside>



	</body>
</html>