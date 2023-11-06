<?php
	$jobs = [
		[
			"role" => "Career break",
			"organization" => "Perpetual Education",
			"tenure" => [
				"startDate" => date_create("01-02-2023"),
				"endDate" => date_create("31-12-2023")
			],
			"actions" => [
				"Learned web development at Perpetual Education",
				"Reset my vision for the future and my approach to my career",
				"Worked on my physical and mental health",
				"Walked my dogs 4-5 miles a day, almost every day"
			]
		],
		[
			"role" => "Product Manager",
			"organization" => "Oshi Health",
			"tenure" => [
				"startDate" => date_create("01-05-2021"),
				"endDate" => date_create("27-01-2023")
			],
			"actions" => [
				"Joined as the second member of the product team, directly responsible for mobile app, web app, and web platform products. Led product operations from seed stage through Series A and in preparation for Series B fundraising",
				"Played many roles, working on everything from typical product tasks to user research, data analysis, project management, QA/feature testing, copy & design reviews",
				"Improved product quality - in other words, my features shipped more predictably and with fewer bugs - through clear product documentation, increased transparency with stakeholders, better collaboration with design and engineering, and more getting in the weeds to test",
				"Drove key metrics with major releases: reduced appointment no-shows/late cancelations, reduced overhead on routine tasks for clinical support staff, and simplified time to complete intake paperwork",
			]
		],
		[
			"role" => "Product Manager",
			"organization" => "IQVIA",
			"tenure" => [
				"startDate" => date_create("01-01-2020"),
				"endDate" => date_create("01-05-2021")
			],
			"actions" => [
				"Helped start a product management team to turn the ad-hoc consulting offering into an off-the-shelf software library for data scientists, in order to grow sales at a faster rate",
				"Played a leading role in defining the MVP, and worked closely with both clients and data science & engineering to improve the offering",
				"Led the build of internal tooling to reduce project delivery times by up to 50%, roughly doubling profit margins across projects",
				"Trained consultants on methodology, model interpretation, client communication, and other project delivery skills",
			]
		],
		[
			"role" => "Consultant",
			"organization" => "IQVIA",
			"tenure" => [
				"startDate" => date_create("01-07-2018"),
				"endDate" => date_create("01-01-2020")
			],
			"actions" => [
				"Joined as an early member of a startup team focused on building a first-in-class machine learning application for predicting rare disease diagnoses and disease progressions in large healthcare datasets",
				"Led the delivery of machine learning projects for large pharmaceutical clients, and my performance was a significant factor in a Fortune 500 client's decision to sign a 4-year contract extension and extend our work to their entire immunology portfolio",
				"Led hiring and interviews for the consulting team, helping grow the team from 4 to 15 people in two years while maintaining a happy, healthy, inclusive culture",
			]
		],
		[
			"role" => "Analyst --> Associate Consultant",
			"organization" => "IQVIA",
			"tenure" => [
				"startDate" => date_create("01-01-2016"),
				"endDate" => date_create("01-06-2018")
			],
			"actions" => [
				"Became an Excel wiz & spreadsheet lover; learned soft skills & managing stakeholder relationships; developed a love for working at the intersection of technical and non-technical teams"
			]
		]
	];

/*
ul
	li Job --> AssArray
		h3 role --> String
		h3 organization --> String
		h3 tenure --> AssArray
			startDate --> date(yyyy/mm)
			endDate --> date(yyyy/mm)
		ul actions --> AssArray
			li task1 --> String
			li task2 --> String
			li task3 --> String
*/
?>