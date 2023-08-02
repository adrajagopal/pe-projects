<?php
	$ctaHeadings = [
		"purple" => [
			"heading" => "This module is a 'call to action'",
			"description" => "These aren't names you should memorize. We're just making them up. Sometimes things get called something so many times, that it sticks. This is a pretty common pattern",
			"link" => "#",
			"cta-copy" => "HERE'S THE ACTION!",
		],
		"red" => [
			"heading" => "This is another CTA",
			"description" => "We're just making them up. Sometimes things get called something so many times, that it sticks. This is a pretty common pattern",
			"link" => "#",
			"cta-copy" => "GO DO IT!",
		],
		"default" => [
			"heading" => "This is another CTA",
			"description" => "We're just making them up. Sometimes things get called something so many times, that it sticks. This is a pretty common pattern",
			"link" => "#",
			"cta-copy" => "GO DO IT!",
		],
	];

	if (isset($type)) {
			$info = $ctaHeadings[$type];
	} else {
		$info =  $ctaHeadings["default"];
	}
?>