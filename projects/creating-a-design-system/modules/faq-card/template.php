<?php 

	$faqIcon = "chevron-right";

	if ($page === "home" OR $page === "blue") {
		$faqIcon = "chevron-right";		
	} elseif ($page === "wavy") {
		$faqIcon = "plus";
	}

?>

<faq-card>
	<details class="faq-card">
		<summary class="medium-voice">
			<?=$faq['question']?>
			<div class="icon-container"><?php include(getFile("images/$faqIcon.svg")); ?></div>
		</summary>
		<p class="small-voice"><?=$faq['answer']?></p>
	</details>
</faq-card>